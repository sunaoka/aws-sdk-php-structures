<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class DescribeSimulationJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
