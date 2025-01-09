<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeInferenceScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceSchedulerName
 */
class DescribeInferenceSchedulerRequest extends Request
{
    /**
     * @param array{InferenceSchedulerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
