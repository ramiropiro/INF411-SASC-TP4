<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset='utf-8' />
  <!-- Librerías FullCalendar / Manejo Front Calendario -->
  <link href='lib/main.css' rel='stylesheet' />
  <script src='lib/main.js'></script>
  <script src='lib/locales/es.js'></script>
  <!-- Librerías JQuery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <!-- Librerías Moment / Manejo de Fechas -->
  <script src="lib/moment.js"></script>
  <!-- Librerías Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }

    #top {
      background: #eee;
      border-bottom: 1px solid #ddd;
      padding: 0 10px;
      line-height: 40px;
      font-size: 12px;
    }

    #calendar {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 10px;
    }
  </style>
</head>

<body>

  <div id='top'>

    <p><u>Sistemas Colaborativos:</u> Trabajo Práctico N° 4 <u>Integrantes:</u> Lunatti, Diego Guillermo - VINF10472 | Ramirez, Ramiro - VINF10400 | Romero, Elio - VINF09511</p>

  </div>
  <!-- DIV ubicación FullCalendar -->
  <div id='calendar'></div>

  <!-- Modal Agregar -->
  <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-horizontal">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
          </div>

          <div class="modal-body">
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
              </div>
            </div>
            <div class="form-group">
              <label for="color" class="col-sm-2 control-label">Color</label>
              <div class="col-sm-10">
                <select name="color" class="form-control" id="color">
                  <option value="">Seleccionar</option>
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                  <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                  <option style="color:#000;" value="#000">&#9724; Negro</option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
              <div class="col-sm-10">
                <input type="text" name="start" class="form-control" id="start" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="end" class="col-sm-2 control-label">Fecha Final</label>
              <div class="col-sm-10">
                <input type="text" name="end" class="form-control" id="end" readonly>
              </div>
            </div>
          </div>

        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
          <button id="paramsOkay" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Editar/Eliminar -->
  <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="form-horizontal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Titulo</label>
              <div class="col-sm-10">
                <input type="text" name="titleE" class="form-control" id="titleE" placeholder="Titulo">
              </div>
            </div>
            <div class="form-group">
              <label for="color" class="col-sm-2 control-label">Color</label>
              <div class="col-sm-10">
                <select name="colorE" class="form-control" id="colorE">
                  <option value="">Seleccionar</option>
                  <option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
                  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
                  <option style="color:#008000;" value="#008000">&#9724; Verde</option>
                  <option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
                  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
                  <option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
                  <option style="color:#000;" value="#000">&#9724; Negro</option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
              <div class="col-sm-10">
                <input type="text" name="startE" class="form-control" id="startE" readonly>
              </div>
            </div>
            <div class="form-group">
              <label for="end" class="col-sm-2 control-label">Fecha Final</label>
              <div class="col-sm-10">
                <input type="text" name="endE" class="form-control" id="endE" readonly>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label class="text-danger"><input id="eliminar" type="checkbox" name="eliminar"> Eliminar Evento</label>
                </div>
              </div>
            </div>

            <input type="hidden" name="id" class="form-control" id="id">
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button id="paramsOkay" type="submit" class="btn btn-primary">Guardar</button>
        </div>

      </div>
    </div>
  </div>
  <!-- Script de inicialización de Fullcalendar -->
  <script>
    $(document).ready(function() {

      // Ubicación y creación del objeto Fullcalendar
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {

        // Variables de inicialización del objeto Fullcalendar.
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        timeZone: 'America/Argentina/Buenos_Aires',
        initialDate: '2022-11-01',
        locale: 'es',
        buttonIcons: true,
        weekNumbers: false,
        navLinks: true,
        editable: true,
        dayMaxEvents: true,
        selectable: true,
        displayEventTime: false,

        // eventos.php, se encarga de externamente de realizar
        // una consulta mysql y devolver un arreglo de estructura JSON.
        events: "eventos.php",

        // La función select ocurre cuando se clickea sobre un día en el calendario
        // la cual invoca un modal para la carga de datos del evento.
        select: function(info) {
          $('#ModalAgregar #start').val(info.startStr);
          $('#ModalAgregar #end').val(info.endStr);
          $('#ModalAgregar').modal('show');
        },

        // La función eventClick ocurre cuando se clickea sobre un evento en el calendario
        // la cual invoca un modal para la modificación de datos del evento o una posible eliminación.
        eventClick: function(info) {
          $('#ModalEditar #id').val(info.event.id);
          $('#ModalEditar #titleE').val(info.event.title);
          $('#ModalEditar #color').val(info.event.color);
          $('#ModalEditar #startE').val(info.event.startStr);
          $('#ModalEditar #endE').val(info.event.endStr);
          $('#ModalEditar').modal('show');
        },

        // La función eventDrop ocurre cuando se clickea sobre un evento y se arrastra a una fecha
        // diferente en el calendario.
        eventDrop: function(info) {
          $('#ModalEditar #id').val(info.event.id);
          $('#ModalEditar #titleE').val(info.event.title);
          $('#ModalEditar #color').val(info.event.color);
          $('#ModalEditar #startE').val(info.event.startStr);
          $('#ModalEditar #endE').val(info.event.endStr);
          $('#ModalEditar').modal('show');
        },

      });

      // Función la cual renderiza el calendario dentro del HTML.
      calendar.render();

      // Funcion de JQuery que permite la escucha del botón "Guardar" 
      // contenido en el Modal Agregar. La misma pasa parametros por medio de AJAX
      // a un PHP externo, agregar_evento.php, el cual se encarga de realizar la inserción SQL
      $('#ModalAgregar').on('click', '#paramsOkay', function(e) {
        $('#ModalAgregar').modal('hide');
        if ($('#title').val()) {
          var start = $('#start').val();
          var end = $('#end').val();
          $.ajax({
            url: 'agregar_evento.php',
            data: 'title=' + $('#title').val() + '&start=' + start + '&end=' + end + '&color=' + $('#color').val(),
            type: "POST",
            success: function(json) {
              // Función la cual recarga los eventos en caso de que la inserción se realice con éxito.
              calendar.refetchEvents();
            }
          });
        }
      });
      
      // Funcion de JQuery que permite la escucha del botón "Guardar" 
      // contenido en el Modal Modificar. La misma pasa parametros por medio de AJAX
      // a un PHP externo, actualizar_evento.php, el cual se encarga de realizar el update SQL.
      // Si el checkbox de eliminar se encuentra selecionado, se procede a llamar a un PHP externo,
      // eliminar_evento.php, el cual se encarga de realizar el delete SQL.
      $('#ModalEditar').on('click', '#paramsOkay', function(e) {
        $('#ModalEditar').modal('hide');
        if (!$('#eliminar').is(":checked")) {
          var start = $('#startE').val();
          var end = $('#endE').val();
          $.ajax({
            url: 'actualizar_evento.php',
            data: 'title=' + $('#titleE').val() + '&start=' + start + '&end=' + end + '&id=' + $('#id').val() + '&color=' + $('#colorE').val(),
            type: "POST",
            success: function(json) {
              // Función la cual recarga los eventos en caso de que la inserción se realice con éxito.
              calendar.refetchEvents();
            }
          });
        } else {
          $.ajax({
            type: "POST",
            url: "eliminar_evento.php",
            data: "&id=" + $('#id').val(),
            success: function(json) {
              $("#eliminar").prop("checked", false);
              // Función la cual recarga los eventos en caso de que la inserción se realice con éxito.
              calendar.refetchEvents();
            }
          });
        };
      });
    })
  </script>

</body>

</html>