<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceRefreshId
 * @property string|null $AutoScalingGroupName
 * @property 'Pending'|'InProgress'|'Successful'|'Failed'|'Cancelling'|'Cancelled'|'RollbackInProgress'|'RollbackFailed'|'RollbackSuccessful'|'Baking'|null $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<0, 100>|null $PercentageComplete
 * @property int<0, max>|null $InstancesToUpdate
 * @property InstanceRefreshProgressDetails|null $ProgressDetails
 * @property RefreshPreferences|null $Preferences
 * @property DesiredConfiguration|null $DesiredConfiguration
 * @property RollbackDetails|null $RollbackDetails
 * @property 'Rolling'|'ReplaceRootVolume'|null $Strategy
 */
class InstanceRefresh extends Shape
{
    /**
     * @param array{
     *     InstanceRefreshId?: string|null,
     *     AutoScalingGroupName?: string|null,
     *     Status?: 'Pending'|'InProgress'|'Successful'|'Failed'|'Cancelling'|'Cancelled'|'RollbackInProgress'|'RollbackFailed'|'RollbackSuccessful'|'Baking'|null,
     *     StatusReason?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     PercentageComplete?: int<0, 100>|null,
     *     InstancesToUpdate?: int<0, max>|null,
     *     ProgressDetails?: InstanceRefreshProgressDetails|null,
     *     Preferences?: RefreshPreferences|null,
     *     DesiredConfiguration?: DesiredConfiguration|null,
     *     RollbackDetails?: RollbackDetails|null,
     *     Strategy?: 'Rolling'|'ReplaceRootVolume'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
