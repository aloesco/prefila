$(document).ready(function(){
    jQuery(function($) {
        $("#rss-feeds").rss("https://www.agenciatributaria.es/AEAT.internet/Inicio/RSS/Todas_las_Novedades/Todas_las_Novedades.xml", {
            entryTemplate: '<p class="rss"><a href="{url}" target="_blank">{title}</a></p>',
            effect: 'slideFastSynced'
        })
    })
    $('#rss-feeds').addClass('borde');
});