<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 */
class DeleteInferenceSchedulerRequest extends Request
{
    /**
     * @param array{InferenceSchedulerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
