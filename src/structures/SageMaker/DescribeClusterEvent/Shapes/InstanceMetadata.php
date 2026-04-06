<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomerEni
 * @property AdditionalEnis|null $AdditionalEnis
 * @property CapacityReservation|null $CapacityReservation
 * @property string|null $FailureMessage
 * @property string|null $LcsExecutionState
 * @property string|null $NodeLogicalId
 */
class InstanceMetadata extends Shape
{
    /**
     * @param array{
     *     CustomerEni?: string|null,
     *     AdditionalEnis?: AdditionalEnis|null,
     *     CapacityReservation?: CapacityReservation|null,
     *     FailureMessage?: string|null,
     *     LcsExecutionState?: string|null,
     *     NodeLogicalId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
