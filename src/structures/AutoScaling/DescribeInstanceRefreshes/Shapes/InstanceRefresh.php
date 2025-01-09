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
 * @property int $PercentageComplete
 * @property int $InstancesToUpdate
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
     *     PercentageComplete?: int,
     *     InstancesToUpdate?: int,
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
