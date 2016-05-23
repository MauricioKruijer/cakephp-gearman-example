<?php
namespace App\Shell\Task;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Psr\Log\LogLevel;
use GearmanJob;

class SleepTask extends Shell
{

    public function main($workload, GearmanJob $job)
    {
    	echo "AAA";
        $job->sendStatus(0, 3);

        sleep($workload['timeout']);

        $job->sendStatus(1, 3);

        sleep($workload['timeout']);

        $job->sendStatus(2, 3);

        sleep($workload['timeout']);

        return array(
            'total_timeout' => $workload['timeout'] * 3
        );
    }
}
