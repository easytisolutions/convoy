<?php

return [
    'power_actions' => [
        'start' => 'Iniciar',
        'restart' => 'Reiniciar',
        'kill' => 'Forçar parada',
        'shutdown' => 'Desligar',
    ],
    'notices' => [
        'power_action_sent_success' => 'Ação de energia enviada com sucesso. Pode levar alguns momentos para processar.',
        'power_action_sent_fail' => 'Falha ao enviar ação de energia.',
    ],

    'state' => 'Estado',
    'states' => [
        'stopped' => 'Parado',
        'running' => 'Em execução',
        'stopping' => 'Parando',
        'starting' => 'Iniciando',
        'shutting_down' => 'Desligando',
    ],
    'uptime' => 'Tempo ativo',
    'poll_status_error' => 'Falha ao verificar status do servidor. Tentando novamente em 5 segundos...',

    'terminal' => [
        'title' => 'Terminal',
        'description' => 'Gerencie seu servidor remotamente pelo navegador.',
        'novnc_description' => 'Melhor compatibilidade, mas com menos recursos e desempenho.',
        'xtermjs_description' => 'Melhor desempenho, mas pode não funcionar em todos os sistemas operacionais.',
    ],

    'server_config' => [
        'title' => 'Configurar este Servidor',
        'description' => 'Você é administrador! Clique abaixo para acessar a configuração de build deste servidor e fazer edições.',
        'configure_server' => 'Configurar Servidor',
    ],
];
