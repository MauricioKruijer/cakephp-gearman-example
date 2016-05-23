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

        $imagePath = $workload['file'];
        $channel = Imagick::CHANNEL_DEFAULT;

        $imagick = new \Imagick(realpath($imagePath));
	    $imagick->addNoiseImage($noiseType, $channel);
	    
	    // header("Content-Type: image/jpg");
	    
	    file_put_contents($imagePath.'new', $imagick->getImageBlob());
        
        $job->sendStatus(1, 2);

        return array(
            'total_timeout' => 'lalal'
        );
    }
}
