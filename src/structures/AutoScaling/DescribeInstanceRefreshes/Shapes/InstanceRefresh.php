<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceRefreshId
 * @property string $AutoScalingGroupName
 * @property 'Pending'|'InProgress'|'Successful'|'Failed'|'Cancelling'|'Cancelled'|'RollbackInProgress'|'RollbackFailed'|'RollbackSuccessful'|'Baking' $Status
 * @property string $StatusReason
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int<0, 100> $PercentageComplete
 * @property int<0, max> $InstancesToUpdate
 * @property InstanceRefreshProgressDetails $ProgressDetails
 * @property RefreshPreferences $Preferences
 * @property DesiredConfiguration $DesiredConfiguration
 * @property RollbackDetails $RollbackDetails
 */
class InstanceRefresh extends Shape
{
    /**
     * @param array{
     *     InstanceRefreshId?: string,
     *     AutoScalingGroupName?: string,
     *     Status?: 'Pending'|'InProgress'|'Successful'|'Failed'|'Cancelling'|'Cancelled'|'RollbackInProgress'|'RollbackFailed'|'RollbackSuccessful'|'Baking',
     *     StatusReason?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     PercentageComplete?: int<0, 100>,
     *     InstancesToUpdate?: int<0, max>,
     *     ProgressDetails?: InstanceRefreshProgressDetails,
     *     Preferences?: RefreshPreferences,
     *     DesiredConfiguration?: DesiredConfiguration,
     *     RollbackDetails?: RollbackDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
