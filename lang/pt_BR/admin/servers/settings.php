<?php

return [
    'server_info' => [
        'title' => 'Informações do Servidor',
        'statuses' => [
            'ready' => 'Pronto',
            'installing' => 'Instalação em Andamento',
            'install_failed' => 'Instalação Recente Falhou',
            'suspended' => 'Suspenso',
            'restoring_backup' => 'Restaurando a partir de um Backup',
            'restoring_snapshot' => 'Restaurando a partir de um Snapshot',
        ],
    ],
    'suspension' => [
        'title' => 'Suspensão',
        'description' => 'Alternar o status de suspensão do servidor.',
        'statuses' => [
            'suspended' => 'Este servidor está suspenso.',
            'not_suspended' => 'Este servidor não está suspenso.',
        ],
        'suspend' => 'Suspender',
        'unsuspend' => 'Reativar',
    ],
    'deletion' => [
        'title' => 'Excluir Servidor',
        'description' => 'O servidor será excluído do painel. Backups e outros dados associados serão destruídos. Contudo, você pode marcar a caixa abaixo para manter a máquina virtual e os dados no nó Proxmox.',
        'deleting_status' => 'Este servidor está sendo excluído.',
        'no_purge' => 'Não remover VM e arquivos relacionados',
        'confirmation' => [
            'title' => 'Excluir :name',
            'description' => 'Tem certeza que deseja excluir :name?',
        ],
    ],
    'build' => [
        'title' => 'Build do Servidor',
    ],
];
