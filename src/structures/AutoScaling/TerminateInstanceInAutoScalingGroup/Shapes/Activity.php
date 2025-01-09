<?php

namespace Sunaoka\Aws\Structures\AutoScaling\TerminateInstanceInAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivityId
 * @property string $AutoScalingGroupName
 * @property string $Description
 * @property string $Cause
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'PendingSpotBidPlacement'|'WaitingForSpotInstanceRequestId'|'WaitingForSpotInstanceId'|'WaitingForInstanceId'|'PreInService'|'InProgress'|'WaitingForELBConnectionDraining'|'MidLifecycleAction'|'WaitingForInstanceWarmup'|'Successful'|'Failed'|'Cancelled'|'WaitingForConnectionDraining' $StatusCode
 * @property string $StatusMessage
 * @property int $Progress
 * @property string $Details
 * @property string $AutoScalingGroupState
 * @property string $AutoScalingGroupARN
 */
class Activity extends Shape
{
    /**
     * @param array{
     *     ActivityId: string,
     *     AutoScalingGroupName: string,
     *     Description?: string,
     *     Cause: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     StatusCode: 'PendingSpotBidPlacement'|'WaitingForSpotInstanceRequestId'|'WaitingForSpotInstanceId'|'WaitingForInstanceId'|'PreInService'|'InProgress'|'WaitingForELBConnectionDraining'|'MidLifecycleAction'|'WaitingForInstanceWarmup'|'Successful'|'Failed'|'Cancelled'|'WaitingForConnectionDraining',
     *     StatusMessage?: string,
     *     Progress?: int,
     *     Details?: string,
     *     AutoScalingGroupState?: string,
     *     AutoScalingGroupARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
