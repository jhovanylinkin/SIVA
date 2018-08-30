M.AutoInit();
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
});
$(document).ready(ev => {
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown(
        {
            autoTrigger: true,
            inDuration: 500,
            outDuration: 225,
            constrainWidth: true, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 85, // Spacing from edge
            coverTrigger: false, // Displays dropdown below the button
            alignment: 'right', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
    $('#notificationsbuttons').click(ev =>{
        notifications();
    });

    $("#notificationsbtnsidebar").click(ev=>{
        notifications();
    });
});

function notifications() {
    $.ajax({
        url: '/admin/configuracion/api/alerts',
        type: 'get'
    })
        .then(data => {
            swal(
                `${data.message}`,
                `${data.messageServer}`,
                'info'
            )
        })
        .fail(error => {
            swal(
                'Error!',
                `${error.statusText}`,
                'error'
            )
        });
}