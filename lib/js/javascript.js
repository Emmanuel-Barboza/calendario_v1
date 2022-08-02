(function (win, doc) {
    'user strict';
    function getCalendar(perfil, div) {
        let calendarEl = doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                start: 'dayGridMonth, timeGridWeek, timeGridDay',
                center: 'title',
                end: 'today prev,next'
            },
            buttonText: {
                today: 'Hoje',
                month: 'Mês',
                week: 'Semana',
                day: 'Dia',
            },
            locale: 'pt-BR',
            dateClick: function (info) {
                if(perfil == 'manager'){
                    alert('vai pra pagina do manager');
                }else{
                    alert('vai para pagina do user');
                }
                // alert('clicou no dia: ' + info.dateStr);
                // alert('cordenadas: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                // alert('visão atual: ' + info.view.type);
            },
            events: '../../../calendario_v1/controllers/ControleEvents.php',
            eventClick: function (info) {
                if(perfil == 'manager'){
                    win.location.href=`/views/manager/editar?id=${info.event.id}`;
                }
            }
        });
        calendar.render();
    }
    if(doc.querySelector('.calendarUser')){
        getCalendar('user', '.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager', '.calendarManager');
    }
})(window, document);