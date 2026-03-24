<?php

return [
    'create_backup' => 'Criar Backup',
    'empty_state' => 'Não há backups',
    'counter_tooltip' => 'Você criou :count de :max backups',
    'create_modal' => [
        'title' => 'Criar um Backup',
        'description' => 'Criar um backup fará uma cópia dos arquivos do seu servidor. Isso pode demorar dependendo do tamanho do servidor.',
        'compression_type' => 'Tipo de Compressão',
        'mode' => 'Modo',
        'modes' => [
            'snapshot' => 'Snapshot',
            'suspend' => 'Suspender',
            'kill' => 'Forçar parada',
        ],
    ],
    'delete_modal' => [
        'title' => 'Excluir :name?',
        'description' => 'Tem certeza que deseja excluir este backup?',
    ],
    'restore_modal' => [
        'title' => 'Restaurar a partir de :name?',
        'description' => 'Tem certeza que deseja restaurar a partir deste backup?',
    ],
    'notices' => [
        'backup_deleted' => ':name excluído',
        'backup_restored' => 'Iniciando restauração do servidor a partir de :name',
    ],
];
