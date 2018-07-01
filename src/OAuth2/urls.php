<?php
return array (
    array(
        'regex' => '#^/authorizations$#',
        'model' => 'OAuth2_Views_Authorizations',
        'method' => 'create',
        'http-method' => array('POST', 'PUT')
    ),
    
    array(
        'regex' => '#^/links$#',
        'model' => 'OAuth2_Views_Links',
        'method' => 'create',
        'http-method' => array('POST', 'PUT')
    ),
    
    /*
     * Server-types
     */
    array(
        'regex' => '#^/server-types$#',
        'model' => 'OAuth2_Views_ServerTypes',
        'method' => 'find',
        'http-method' => 'GET'
    ),
    
    /*
     * Servers
     */
	array(
        'regex' => '#^/servers$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'find',
        'http-method' => 'GET'
    ),
	array(
        'regex' => '#^/servers$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'deleteAll',
        'http-method' => 'DELETE'
    ),
	array(
        'regex' => '#^/servers$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'create',
	    'http-method' => array('POST', 'PUT')
    ),
	array(
        'regex' => '#^/servers/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'get',
        'http-method' => 'GET'
    ),
	array(
        'regex' => '#^/servers/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'update',
	    'http-method' => array('POST', 'PUT')
    ),
	array(
        'regex' => '#^/servers/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'delete',
        'http-method' => 'DELETE'
    ),
    
    /*
     * Connections
     */
    array(
        'regex' => '#^/connections$#',
        'model' => 'OAuth2_Views_Connections',
        'method' => 'find',
        'http-method' => 'GET'
    ),
    array(
        'regex' => '#^/connections$#',
        'model' => 'OAuth2_Views_Connections',
        'method' => 'deleteAll',
        'http-method' => 'DELETE'
    ),
    array(
        'regex' => '#^/connections$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'create',
        'http-method' => array('POST', 'PUT')
    ),
    array(
        'regex' => '#^/connections/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'get',
        'http-method' => 'GET'
    ),
    array(
        'regex' => '#^/connections/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'update',
        'http-method' => array('POST', 'PUT')
    ),
    array(
        'regex' => '#^/connections/(\d+)$#',
        'model' => 'OAuth2_Views_Servers',
        'method' => 'delete',
        'http-method' => 'DELETE'
    ),
    
    
    
    
    
);