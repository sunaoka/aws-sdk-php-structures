<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 */
class StartInferenceSchedulerRequest extends Request
{
    /**
     * @param array{InferenceSchedulerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
