<?php

return [
    'ip_allocation' => [
        'empty_state' => 'Não há endereços associados a este servidor.',
    ],
    'display_info' => [
        'title' => 'Nome do Servidor',
    ],
    'reinstall' => [
        'title' => 'Reinstalar Servidor',
        'description' => 'Inicie seu servidor com uma instalação limpa.',
        'start_server_after_installing' => 'Iniciar Servidor após Concluir a Instalação',
        'modal' => [
            'title' => 'Confirmar Reinstalação',
            'description' => 'Tem certeza que deseja reinstalar este servidor? Todos os dados serão perdidos.',
        ],
    ],
    'isos' => [
        'title' => 'ISOs Montáveis',
        'empty' => 'Não há ISOs disponíveis',
    ],
    'device_config' => [
        'title' => 'Configuração de Dispositivo',
        'current' => 'Ordem de boot atual (a primeira terá prioridade)',
        'unused' => 'Dispositivos não utilizados',
        'unused_empty' => 'Não há dispositivos não utilizados.',
        'no_boot_device_warning' => 'Nenhum dispositivo de boot foi configurado. Sua VM não irá iniciar.',
    ],
    'nameservers' => [
        'title' => 'Servidores de Nomes',
        'nameserver' => 'Servidor de Nomes :index',
        'add' => 'Novo Servidor de Nomes',
    ],
    'auth' => [
        'title' => 'Autenticação',
    ],
    'hardware' => [
        'bandwidth_used' => 'Banda Utilizada',
        'bandwidth_alloted' => 'Banda Alocada',
    ],
];
