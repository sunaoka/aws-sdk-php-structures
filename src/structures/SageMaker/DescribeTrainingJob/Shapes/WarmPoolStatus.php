<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Available'|'Terminated'|'Reused'|'InUse' $Status
 * @property int<0, max>|null $ResourceRetainedBillableTimeInSeconds
 * @property string|null $ReusedByJob
 */
class WarmPoolStatus extends Shape
{
    /**
     * @param array{
     *     Status: 'Available'|'Terminated'|'Reused'|'InUse',
     *     ResourceRetainedBillableTimeInSeconds?: int<0, max>|null,
     *     ReusedByJob?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
