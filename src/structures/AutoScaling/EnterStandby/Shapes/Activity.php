<?php

namespace Sunaoka\Aws\Structures\AutoScaling\EnterStandby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActivityId
 * @property string $AutoScalingGroupName
 * @property string|null $Description
 * @property string $Cause
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'PendingSpotBidPlacement'|'WaitingForSpotInstanceRequestId'|'WaitingForSpotInstanceId'|'WaitingForInstanceId'|'PreInService'|'InProgress'|'WaitingForELBConnectionDraining'|'MidLifecycleAction'|'WaitingForInstanceWarmup'|'Successful'|'Failed'|'Cancelled'|'WaitingForConnectionDraining' $StatusCode
 * @property string|null $StatusMessage
 * @property int|null $Progress
 * @property string|null $Details
 * @property string|null $AutoScalingGroupState
 * @property string|null $AutoScalingGroupARN
 */
class Activity extends Shape
{
    /**
     * @param array{
     *     ActivityId: string,
     *     AutoScalingGroupName: string,
     *     Description?: string|null,
     *     Cause: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     StatusCode: 'PendingSpotBidPlacement'|'WaitingForSpotInstanceRequestId'|'WaitingForSpotInstanceId'|'WaitingForInstanceId'|'PreInService'|'InProgress'|'WaitingForELBConnectionDraining'|'MidLifecycleAction'|'WaitingForInstanceWarmup'|'Successful'|'Failed'|'Cancelled'|'WaitingForConnectionDraining',
     *     StatusMessage?: string|null,
     *     Progress?: int|null,
     *     Details?: string|null,
     *     AutoScalingGroupState?: string|null,
     *     AutoScalingGroupARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
