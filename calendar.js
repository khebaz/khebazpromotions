document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
            {
                title: 'Sound System Rental',
                start: '2024-09-01',
                description: 'Sound system rental event.',
                color: '#007bff' // Optional: Custom color for the event
            },
            {
                title: 'DJ Services',
                start: '2024-09-05',
                description: 'DJ services for an event.',
                color: '#28a745' // Optional: Custom color for the event
            },
            {
                title: 'Event Planning Consultation',
                start: '2024-09-10',
                description: 'Consultation for event planning.',
                color: '#dc3545' // Optional: Custom color for the event
            }
        ]
    });

    calendar.render();
});
