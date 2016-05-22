<?php
namespace App\Shell\Task;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Psr\Log\LogLevel;

class ProcessImageTask extends Shell
{

    public function main($workload, GearmanJob $job)
    {
        $job->sendStatus(0, 2);

        echo $workload['file'];

        $job->sendStatus(1, 2);

        return array(
            'total_timeout' => 'lalal'
        );
    }
}
