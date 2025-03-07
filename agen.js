flatpickr('#data', {
    minDate: 'today',
    dateFormat: 'd/m/Y',
});
flatpickr('#hora', {
    enableTime: true,
    noCalendar: true,
    dateFormat: 'H:i',
    time_24hr: true,
});
document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();
    alert('Agendamento realizado com sucesso! Entraremos em contato para confirmar.');
});