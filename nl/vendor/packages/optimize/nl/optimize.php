<?php

return [
    'settings' => [
        'title' => 'Optimaliseer de paginasnelheid',
        'description' => 'Verklein HTML-uitvoer, inline CSS, verwijder opmerkingen...',
        'enable' => 'Paginasnelheid optimaliseren inschakelen?',
    ],
    'collapse_white_space' => 'Witte ruimte samenvouwen',
    'collapse_white_space_description' => 'Dit filter vermindert het aantal bytes dat in een HTML-bestand wordt verzonden door onnodige witruimte te verwijderen.',
    'elide_attributes' => 'Elimineer attributen',
    'elide_attributes_description' => 'Dit filter verkleint de overdrachtsgrootte van HTML-bestanden door attributen uit tags te verwijderen wanneer de opgegeven waarde gelijk is aan de standaardwaarde voor dat attribuut. Dit kan een bescheiden aantal bytes besparen en kan het document comprimeerbaarder maken door de betreffende tags te canoniseren.',
    'inline_css' => 'Inline CSS',
    'inline_css_description' => 'Dit filter zet het inline \'style\'-attribuut van tags om in klassen door de CSS naar de koptekst te verplaatsen.',
    'insert_dns_prefetch' => 'Voeg DNS-prefetch in',
    'insert_dns_prefetch_description' => 'Dit filter injecteert tags in de HEAD om de browser in staat te stellen DNS-prefetching uit te voeren.',
    'remove_comments' => 'Opmerkingen verwijderen',
    'remove_comments_description' => 'Dit filter elimineert HTML-, JS- en CSS-opmerkingen. Het filter verkleint de overdrachtsgrootte van HTML-bestanden door de opmerkingen te verwijderen. Afhankelijk van het HTML-bestand kan dit filter het aantal bytes dat op het netwerk wordt verzonden aanzienlijk verminderen.',
    'trim_urls' => 'Trim URLs',
    'trim_urls_description' => 'Dit filter verkleint URL\'s door de omzetting relatief te maken ten opzichte van de basis-URL voor de pagina.',
    'remove_quotes' => 'Aanhalingstekens verwijderen',
    'remove_quotes_description' => 'Dit filter verwijdert onnodige aanhalingstekens uit HTML-attributen. Hoewel vereist door de verschillende HTML-specificaties, staan browsers toe dat ze worden weggelaten wanneer de waarde van een attribuut is samengesteld uit een bepaalde subset van tekens (alfanumerieke tekens en enkele leestekens).',
    'defer_javascript' => 'Javascript uitstellen',
    'defer_javascript_description' => 'Stelt de uitvoering van javascript in de HTML uit. Annuleer uitstel indien nodig in een script, gebruik data-pagespeed-no-defer als scriptattribuut om uitstel te annuleren.',
];
