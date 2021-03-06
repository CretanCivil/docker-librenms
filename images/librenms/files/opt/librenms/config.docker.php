<?php

$config['db_host'] = getenv('DB_HOST');
$config['db_port'] = intval(getenv('DB_PORT') ?: 3306);
$config['db_user'] = getenv('DB_USER');
$config['db_pass'] = getenv('DB_PASS');
$config['db_name'] = getenv('DB_NAME');
$config['db']['extension'] = 'mysqli';

$config['user'] = 'librenms';
$config['base_url'] = getenv('BASE_URL');

$config['snmp']['timeout'] = 0.2;
$config['auth_mechanism'] = "mysql";
$config['rrd_purge'] = 0;
$config['enable_billing'] = 1;
$config['show_services'] = 1;
$config['update'] = 0;

$config['nagios_plugins']   = "/usr/lib/nagios/plugins";

$config['rrdtool_version'] = '1.5.5';
$config['rrdcached'] = "unix:/var/run/rrdcached/rrdcached.sock";

$config['memcached']['enable'] = filter_var(getenv('MEMCACHED_ENABLE'), FILTER_VALIDATE_BOOLEAN);
$config['memcached']['host'] = getenv('MEMCACHED_HOST');
$config['memcached']['port'] = intval(getenv('MEMCACHED_PORT') ?: 11211);
$config['memcached']['ttl'] = 240;

$config['fping'] = "/usr/bin/fping";
$config['fping_options']['retries'] = 0;
$config['fping_options']['timeout'] = 100;
$config['fping_options']['count'] = 3;
$config['fping_options']['millisec'] = 100;


# 动态ip
$config['host_dynamic_ip'] = true;//1 ip
# 默认传输方式,一般是udp,可以是tcp,也可以填两个但是性能会有问题
$config['autoscan']['snmp']['transports'] = array(
    'udp',
    #'tcp',
);




$g_metric_data = [];
$g_metric_service = [];
$g_metric_check = [];



$config['agent']['host'] = 'http://172.29.231.177:8000/snmp/v1/';

$config['agent_host'] = 'snmp1';


//以下内容需要配置
# 默认扫描协议 大部分都是v2c 可以是 array('v2c', 'v3', 'v1') 如果不填那么会扫描三次 性能问题
$config['autoscan']['snmp']['version'] = 'v2c';

#默认的snmp 密码
$config['snmp']['community'] = array("public");

#需要发现的网段
$config['nets'][] = "172.29.231.0/24";
$config['nets'][] = "172.29.228.0/24";
$config['nets'][] = "172.29.226.0/24";
$config['nets'][] = "172.29.201.0/24";
$config['nets'][] = "172.29.230.0/24";

#特殊IP的密码
$config['snmp']['v2c']['community']['172.29.201.1'] = 'h3c';
$config['snmp']['v2c']['community']['172.29.226.1'] = 'Purvar123';
$config['snmp']['v2c']['community']['172.29.230.46'] = 'Purvar123';

#个人key
$config['agent']['key'] = 'd345ee0759994410b47d098230c4a188';//'8571ffe00284475cb06b17847a97b6bf';