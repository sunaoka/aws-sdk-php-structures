<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batch
 */
class DescribeSimulationJobBatchRequest extends Request
{
    /**
     * @param array{batch: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
