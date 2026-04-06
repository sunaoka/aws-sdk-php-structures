<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDescribeSimulationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $jobs
 */
class BatchDescribeSimulationJobRequest extends Request
{
    /**
     * @param array{jobs: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
