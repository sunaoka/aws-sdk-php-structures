<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class CancelSimulationJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
