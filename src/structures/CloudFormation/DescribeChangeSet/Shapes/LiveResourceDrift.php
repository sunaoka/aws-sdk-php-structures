<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PreviousValue
 * @property string|null $ActualValue
 * @property \Aws\Api\DateTimeResult|null $DriftDetectionTimestamp
 */
class LiveResourceDrift extends Shape
{
    /**
     * @param array{
     *     PreviousValue?: string|null,
     *     ActualValue?: string|null,
     *     DriftDetectionTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
