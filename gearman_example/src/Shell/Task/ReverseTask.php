<?php
namespace App\Shell\Task;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Psr\Log\LogLevel;
use GearmanJob;

class ReverseTask extends Shell
{

    public function main($workload, GearmanJob $job)
    {
        return strrev($workload['string']);
    }
}
