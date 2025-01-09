<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $OutpostArn
 * @property OperatorResponse $Operator
 * @property list<InstanceStatusEvent> $Events
 * @property string $InstanceId
 * @property InstanceState $InstanceState
 * @property InstanceStatusSummary $InstanceStatus
 * @property InstanceStatusSummary $SystemStatus
 * @property EbsStatusSummary $AttachedEbsStatus
 */
class InstanceStatus extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     OutpostArn?: string,
     *     Operator?: OperatorResponse,
     *     Events?: list<InstanceStatusEvent>,
     *     InstanceId?: string,
     *     InstanceState?: InstanceState,
     *     InstanceStatus?: InstanceStatusSummary,
     *     SystemStatus?: InstanceStatusSummary,
     *     AttachedEbsStatus?: EbsStatusSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
