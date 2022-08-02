(function (win, doc) {
    'user strict';
    let calendarEl = doc.querySelector('.calendar');
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
        events: '../../../calendario_v1/controllers/ControleEvents.php',
    });
    calendar.render();
})(window, document);