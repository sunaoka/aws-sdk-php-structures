<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Available'|'Terminated'|'Reused'|'InUse' $Status
 * @property int<0, max> $ResourceRetainedBillableTimeInSeconds
 * @property string $ReusedByJob
 */
class WarmPoolStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Available'|'Terminated'|'Reused'|'InUse',
     *     ResourceRetainedBillableTimeInSeconds?: int<0, max>,
     *     ReusedByJob?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
