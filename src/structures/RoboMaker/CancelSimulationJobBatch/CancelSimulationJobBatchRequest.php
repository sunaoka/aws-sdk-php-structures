<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelSimulationJobBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batch
 */
class CancelSimulationJobBatchRequest extends Request
{
    /**
     * @param array{batch: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
