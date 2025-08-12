<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property string|null $OutpostArn
 * @property OperatorResponse|null $Operator
 * @property list<InstanceStatusEvent>|null $Events
 * @property string|null $InstanceId
 * @property InstanceState|null $InstanceState
 * @property InstanceStatusSummary|null $InstanceStatus
 * @property InstanceStatusSummary|null $SystemStatus
 * @property EbsStatusSummary|null $AttachedEbsStatus
 */
class InstanceStatus extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     OutpostArn?: string|null,
     *     Operator?: OperatorResponse|null,
     *     Events?: list<InstanceStatusEvent>|null,
     *     InstanceId?: string|null,
     *     InstanceState?: InstanceState|null,
     *     InstanceStatus?: InstanceStatusSummary|null,
     *     SystemStatus?: InstanceStatusSummary|null,
     *     AttachedEbsStatus?: EbsStatusSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
