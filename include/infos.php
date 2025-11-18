<?php

// Array com as informações das especialidades
$especialidades = [
    [
        'icon' => 'hugeicons_man.png',
        'alt' => 'Urologia masculina',
        'label' => 'Urologia masculina'
    ],
    [
        'icon' => 'streamline-ultimate_pregnancy-sperm-1.png',
        'alt' => 'Infertilidade',
        'label' => 'Infertilidade'
    ],
    [
        'icon' => 'ph_drop-thin.png',
        'alt' => 'Disfunções urinárias',
        'label' => 'Disfunções urinárias'
    ],
    [
        'icon' => 'healthicons_prostate-cancer-outline.png',
        'alt' => 'Oncologia urológica',
        'label' => 'Oncologia urológica'
    ],
    [
        'icon' => 'hugeicons_gem.png',
        'alt' => 'Litíase',
        'label' => 'Litíase'
    ],
    [
        'icon' => 'hugeicons_woman.png',
        'alt' => 'Urologia feminina',
        'label' => 'Urologia feminina'
    ],
    [
        'icon' => 'healthicons_baby-0203m-outline.png',
        'alt' => 'Urologia Pediátrica',
        'label' => 'Urologia Pediátrica'
    ],
    [
        'icon' => 'streamline-ultimate_factory-industrial-robot-arm-1.png',
        'alt' => 'Cirurgia robótica',
        'label' => 'Cirurgia robótica'
    ]
];



// NOVOS ARRAYS PARA LOCAIS DE ATENDIMENTO

$locais_aracaju = [
    [
        'id' => 'climedi',
        'img_convenio' => 'aracaju/climedi.jpg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'climedi.png',
        'tem_convenio' => true, // <-- ADICIONE AQUI
        'alt' => 'CLIMEDI',
        'titulo' => 'CLIMEDI',
        'endereco' => 'Av. Barão de Maruim, 570 - Suíça, Aracaju - SE, 49010-340',
        'telefone' => '(79) 2107-9800'
    ],
    [
        'id' => 'hospim',
        'img_convenio' => 'aracaju/hosprim.jpg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'hosprim.png',
        'tem_convenio' => true, // <-- ADICIONE AQUI
        'alt' => 'Hospital do Rim',
        'titulo' => 'Hospital do Rim',
        'endereco' => 'R. Arauá, 92 - Centro, Aracaju - SE, 49010-330',
        'telefone' => '(79) 3211-9007'
    ]
];

$locais_salvador = [
    [
        'id' => 'Clinica Clivale',
        'img_convenio' => 'salvador/clivale.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'clivale.png',
        'alt' => 'Clínica Clivale',
        'titulo' => 'Clínica Clivale',
        'endereco' => 'Rua Barão de Cotegipe, 36 - Calçada, Salvador - BA, 40411-001',
        'telefone' => '(71) 3512-8500'
    ],
    [
        'id' => 'Centro Médico Santa Barbara',
        'img_convenio' => 'salvador/santa-barba.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'santa-barbara.png',
        'alt' => 'Centro Médico Santa Barbara',
        'titulo' => 'Centro Médico Santa Barbara',
        'endereco' => 'R. Barros Falcão, 365 - Matatu, Salvador - BA, 40255-370',
        'telefone' => '(71) 3233-3315'
    ],
    [
        'id' => 'saudemais',
        'img_convenio' => 'salvador/saudemais.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'saudemais.png',
        'alt' => 'Clínica Saúde Mais',
        'titulo' => 'Clínica Saúde Mais',
        'endereco' => 'R. Prof. Agroriniano de Barros, 228 - Caixa d\'Água, Salvador - BA, 40323-010',
        'telefone' => '(71) 3241-3241'
    ],
    [
        'id' => 'clinica-da-mulher',
        'img_convenio' => 'salvador/saudemais.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'clinica-da-mulher.png',
        'alt' => 'Clínica da Mulher',
        'titulo' => 'Clínica da Mulher',
        'endereco' => 'R. Eduardo José dos Santos, 147 - 1006 - Federação, Salvador - BA, 40210-755',
        'telefone' => '(71) 3237-2633'
    ],
    [
        'id' => 'hospital-portugues',
        'img_convenio' => 'salvador/hospitalportugues.jpeg', // <-- CAMINHO COMPLETO AQUI
        'img' => 'hospital-portugues.png',
        'alt' => 'Centro Médico Hospital Português ',
        'titulo' => 'Centro Médico Hospital Português ',
        'endereco' => 'Avenida Princesa Isabel, 914 - Barra Avenida, Salvador - BA, 40140-901',
        'telefone' => '(71) 3203-5186'
    ]
];


// ... (seus arrays $especialidades, $locais_aracaju, $locais_salvador já existem aqui) ...


// NOVO ARRAY PARA DEPOIMENTOS
$depoimentos = [
    [
        'nome' => 'C. A.',
        'idade' => '42 anos',
        'local' => 'Aracaju - SE',
        'depoimento' => 'Desde a primeira consulta, me senti acolhido e respeitado. O atendimento foi claro, humano e atencioso, transmitindo confiança em cada detalhe. Hoje sigo o tratamento com tranquilidade e gratidão por ter encontrado um profissional que realmente se importa com a minha saúde.'
    ],
    [
        'nome' => 'M. S.',
        'idade' => '35 anos',
        'local' => 'Salvador - BA',
        'depoimento' => 'Profissional exemplar! A Dra. Emily foi muito atenciosa e paciente para explicar todo o procedimento, o que me deixou muito mais calma. Recomendo de olhos fechados.'
    ]
];



