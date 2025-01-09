<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeRetrainingScheduler;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelName
 */
class DescribeRetrainingSchedulerRequest extends Request
{
    /**
     * @param array{ModelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
