<?php

use App\Services\GenreCategorizer;

return [
    'other' => GenreCategorizer::OTHER,

    'categories' => [
        GenreCategorizer::ROCK,
        GenreCategorizer::POP_RB_SOUL,
        GenreCategorizer::HIP_HOP,
        GenreCategorizer::ELECTRONIC,
        GenreCategorizer::FOLK,
        GenreCategorizer::BLUES_JAZZ_FUNK,
        GenreCategorizer::CLASSICAL,
        GenreCategorizer::WORLD,
        GenreCategorizer::OTHER,
    ],

    //Genre has several categories
    'regularKeyWords' => [
        GenreCategorizer::ROCK => ['rock', 'surf', 'punk', 'metal', 'djent', 'pixie', 'emo'],
        GenreCategorizer::POP_RB_SOUL => ['pop', 'disco', 'r&b', 'soul', 'gospel'],
        GenreCategorizer::HIP_HOP => ['hip hop', 'hip-hop', 'rap', 'phonk', 'drill', 'boom bap', 'chillhop'],
        GenreCategorizer::ELECTRONIC => ['trance', 'edm', 'house', 'techno', 'dnb', 'synth', 'electro', 'tronica',
            'amapiano', 'club', 'bass', 'dubstep', 'beat', 'glitch', 'dance', 'rave'],
        GenreCategorizer::FOLK => ['folk', 'country', 'bluegrass', 'roots', 'americana', 'triste', 'entehno', 'dangdut'],
        GenreCategorizer::BLUES_JAZZ_FUNK => ['jazz', 'blues', 'funk'],
        GenreCategorizer::CLASSICAL => ['classical', 'orchestra', 'romantic', 'choir', 'ballet class'],
        GenreCategorizer::WORLD => ['samba', 'rumba', 'cumbia', 'tango', 'norteno', 'bossa nova', 'indigenous',
            'reggae', 'ska', 'flamenco', 'salsa', 'hawaiian', 'arrocha', 'latin', 'trova', 'minyao'],
    ],

    //Genre has only one category
    'specialKeyWords' => [
        GenreCategorizer::ROCK => ['pop punk', 'rap rock', 'ska punk', 'dance-punk', 'dance rock', 'straight edge',
            'britpop', 'ponk', 'ukhc', 'screamo', 'beatlesque', 'funk metal', 'deathcore', 'blues rock', 'funk metal',
            'funk rock', 'classical metal', 'punk blues', 'merseybeat', 'trancecore', 'new rave', 'skate punk',
            'post-hardcore', 'melodic hardcore', 'new wave', 'lovsang', 'visual kei'],
        GenreCategorizer::POP_RB_SOUL => ['singer-songwriter', 'diva house', 'laulaja-lauluntekija', 'francoton',
            'schlager', 'chanson', 'j-division', 'canzone napoletana', 'funk pop', 'new romantic', 'brega romantico',
            'rebel blues', 'dance pop', 'pop dance', 'electropop', 'synthpop', 'electropowerpop', 'electro-pop', 'ccm',
            'alt z'],
        GenreCategorizer::HIP_HOP => ['funk mtg', 'funk consciente', 'funk ostentacao', 'funk paulista', 'drain',
            'psychokore', 'lo-fi beat', 'japanese beats', 'lo-fi product', 'zxc', 'zhenskiy rep', 'hip house',
            'rave funk', 'funk mandelao', 'funk viral', 'funk 150 bpm', 'brega funk', 'funk bh', 'trap funk',
            'mega funk', 'g funk', 'rap romantico', 'jazzhop', 'pop rap', 'pluggnb', 'lo-fi chill', 'rkt', 'sad lo-fi'],
        GenreCategorizer::WORLD => ['carioca', 'rocksteady', 'dancehall', 'azontobeats', 'manguebeat', 'afrobeat',
            'axe', 'forro', 'mpb', 'cuarteto', 'pagode', 'mexicana', 'ranchera', 'grupera', 'corrido', 'sungura',
            'perreo', 'bhajan', 'ghazal', 'enka', 'contemporanea', 'manele', 'cantautor', 'bachata', 'caliente', 'dub',
            'roots reggae', 'desi pop', 'tamil pop', 'mambo', 'sarkilar', 'cubaton', 'urbano', 'trinibad', 'afroswing'],
        GenreCategorizer::ELECTRONIC => ['cyberpunk', 'funky tech house', 'disco house', 'funky house', 'drum and bass',
            'future bass', 'neurofunk', 'hjemmesnekk', 'new french touch', 'hardstyle', 'rawstyle', 'jungle',
            'jazztronica', 'nu jazz', 'jazz boom bap', 'liquid funk', 'drumfunk', 'jazzy dnb', 'uk garage',
            'jazz house', 'groove room', 'russelater', 'uptempo hardcore'],
    ],

    'bannedGenreNames' => ['sleep', 'white noise', 'rain', 'world meditation', 'russian chanson', 'kleine hoerspiel',
        'hoerspiel', 'writing', 'musica de fondo', 'shush', 'british soundtrack', 'epicore', 'orchestral soundtrack',
        'soundtrack', 'video game music', 'anime score', 'japanese soundtrack', 'ocean', 'kabarett', 'environmental',
        'genshin', 'asmr', 'sped up', 'pet calming', 'workout product', 'lullaby', 'water', 'bgm', 'neru', 'vocaloid',
        'japanese instrumental', 'piano cover', 'mollywood', 'sandalwood', 'spa', 'sound', 'yoga', 'pianissimo',
        'icelandic experimental', 'japanese guitar', 'japanese vgm', 'instrumental worship', 'piano worship', 'reiki',
        'german soundtrack', 'brain waves', 'korean instrumental', 'dinner jazz', 'music box', 'slowed and reverb',
        'binaural', 'bornehistorier', 'jirai kei', 'erotic product', 'puirt-a-beul', 'massage', 'zen', 'mindfulness',
        'classic bollywood', 'filmi', 'modern bollywood', 'meditation', 'ilahiler', 'lesen', 'liedermacher',
        'disney piano', 'easy listening', 'lounge', 'therapy', 'chill out', 'cancion infantil latinoamericana', 'anime',
        'j-acoustic', 'acoustic', 'dublin indie', 'kindermusik', 'ensemble stars', 'hypnosis mic', 'cartoon', 'nursery',
        'polish alternative', 'polish indie', 'theremin', 'musica per bambini', "children's choir", "children's music",
        'background music', 'classic soundtrack', 'italian soundtrack', 'vintage italian soundtrack', 'anime piano',
        'hardcore', 'jazz cover', 'bossa nova cover', 'coverchill', 'background jazz', 'funk das antigas',
        'pop romantico', 'alternative dance', 'russian dance', 'edmonton indie', 'russian dance pop', 'uk funky',
        'covertronica', 'australian dance', '432hz', 'turkish soundtrack', 'norske viser', 'redneck',
        'hollywood', 'show tunes', 'german oi', 'idol', 'barnsagor', 'jawaiian', 'world worship',
        'south african alternative', 'barnemusikk', 'christian lo-fi', 'lo-fi cover', 'christelijk', 'mexican indie',
        'j-indie', 'norwegian indie', 'australian indie', 'finnish indie', 'gothenburg indie', 'dominican indie',
        'indie quebecois', 'bornesange', "preschool children's music", 'indie michoacano', 'mexican indie',
        'manso indie', 'chilean indie', 'chinese indie', "nz children's music", 'slovak indie', 'kodomo no ongaku',
        'cocuk sarkilari', 'musica infantil', "children's story", 'musica para ninos', 'wellington indie',
        "british children's music", 'indie viet', 'worship', 'opm', 'greek indie', 'weirdcore', 'wrestling',
        'ambient guitar', 'hindi indie', 'adult standards', 'german indie', 'gymcore', 'melbourne bounce international',
        'relaxative', 'auckland indie'],
];
