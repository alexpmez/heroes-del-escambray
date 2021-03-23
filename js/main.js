$('#profileModal').on('show.bs.modal', function(e) {
    $(this).find('.modal-body').load(e.relatedTarget.href);
});

$('#martiresModal').on('show.bs.modal', function(e) {
    $(this).find('img').attr("src", e.relatedTarget.href);
    $(this).find('.martires-modal-copy').html(e.relatedTarget.title);
    $(this).find('.modal-title').html(e.relatedTarget.name);
    $(this).find('.modal-dialog').css({
        'max-width': e.relatedTarget.id
    });
});

//add current year to footer
$(".copyright span").text((new Date).getFullYear() + " ");