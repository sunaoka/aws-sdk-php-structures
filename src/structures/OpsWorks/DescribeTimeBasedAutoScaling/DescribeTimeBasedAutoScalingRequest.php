<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeTimeBasedAutoScaling;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $InstanceIds
 */
class DescribeTimeBasedAutoScalingRequest extends Request
{
    /**
     * @param array{InstanceIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
