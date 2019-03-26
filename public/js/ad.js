$('#add-image').click(function() {
    // Récupère le numéro des futurs champs à créer 
    const index = +$('#widgets-counter').val();

    // Récupère le prototype des entrées
    const template = $('#ad_images').data('prototype').replace(/__name__/g, index);
    
    // Affichage du formulaire
    $('#ad_images').append(template);

    $('#widgets-counter').val(index + 1);

    // Gère le bouton Supprimer
    handleDeleteButtons();
});

function handleDeleteButtons() {
    $('button[data-action="delete"]').click(function() {
        const target = $(this).data('target');
        
        $(target).remove();
    });
}

function updateCounter() {
    const count = +$('#ad_images .form-group').length;

    $('#widgets-counter').val(count);
}

handleDeleteButtons();
updateCounter();