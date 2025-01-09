<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProcessName
 * @property string $SuspensionReason
 */
class SuspendedProcess extends Shape
{
    /**
     * @param array{
     *     ProcessName?: string,
     *     SuspensionReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
