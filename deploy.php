<?php
namespace Deployer;

require 'recipe/codeigniter.php';

// Config

set('repository', '');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('103.191.92.11')
    ->set('remote_user', 'testing')
    ->set('deploy_path', '~/ci3');

// Tasks

task('build', function () {
    cd('{{release_path}}');
    run('npm run build');
});

after('deploy:failed', 'deploy:unlock');
