<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProcessName
 * @property string|null $SuspensionReason
 */
class SuspendedProcess extends Shape
{
    /**
     * @param array{
     *     ProcessName?: string|null,
     *     SuspensionReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
