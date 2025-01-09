<?php

namespace Sunaoka\Aws\Structures\RoboMaker\RestartSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class RestartSimulationJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
