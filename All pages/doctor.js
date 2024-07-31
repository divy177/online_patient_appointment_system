document.addEventListener('DOMContentLoaded', function() {
    const appointmentList = document.getElementById('appointment-list');

    // Sample appointments data (replace with real data)
    const appointmentsData = [
        { patientName: 'John Doe', time: '10:00 AM' },
        { patientName: 'Jane Smith', time: '11:00 AM' },
        { patientName: 'Alice Johnson', time: '02:00 PM' }
    ];

    // Display appointments
    displayAppointments(appointmentsData);

    function displayAppointments(appointments) {
        appointmentList.innerHTML = '';

        appointments.forEach(appointment => {
            const listItem = document.createElement('li');
            listItem.textContent = ${appointment.patientName} - ${appointment.time};
            appointmentList.appendChild(listItem);
        });
    }
});