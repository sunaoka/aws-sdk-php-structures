<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 */
class StopInferenceSchedulerRequest extends Request
{
    /**
     * @param array{InferenceSchedulerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
