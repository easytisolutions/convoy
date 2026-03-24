<?php

return [
    'node_info' => [
        'title' => 'Informações do Nó',
    ],
    'coterm' => [
        'title' => 'Coterm',
        'description' => 'O Coterm permite ocultar a origem do seu nó dos usuários enquanto acessam o console web.',
        'enable' => 'Habilitar Coterm',
        'tls' => 'TLS/SSL Habilitado',
        'token_created' => [
            'title' => 'Token Criado',
            'description' => 'Aqui está o seu token recém-criado. Anote o valor do token, pois esta é a única e última vez que você irá visualizá-lo.',
            'action' => 'Ok, anotei',
        ],
        'reset' => [
            'title' => 'Redefinir Token?',
            'description' => 'Tem certeza que deseja redefinir o token Coterm deste nó? Quaisquer instâncias do Coterm que dependam deste token irão falhar.',
            'action' => 'Redefinir Token',
        ],
    ],
];
