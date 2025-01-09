<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $PatchGroup
 * @property string $BaselineId
 * @property string $SnapshotId
 * @property string $InstallOverrideList
 * @property string $OwnerInformation
 * @property int $InstalledCount
 * @property int $InstalledOtherCount
 * @property int $InstalledPendingRebootCount
 * @property int $InstalledRejectedCount
 * @property int $MissingCount
 * @property int $FailedCount
 * @property int $UnreportedNotApplicableCount
 * @property int $NotApplicableCount
 * @property \Aws\Api\DateTimeResult $OperationStartTime
 * @property \Aws\Api\DateTimeResult $OperationEndTime
 * @property 'Scan'|'Install' $Operation
 * @property \Aws\Api\DateTimeResult $LastNoRebootInstallOperationTime
 * @property 'RebootIfNeeded'|'NoReboot' $RebootOption
 * @property int $CriticalNonCompliantCount
 * @property int $SecurityNonCompliantCount
 * @property int $OtherNonCompliantCount
 */
class InstancePatchState extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PatchGroup: string,
     *     BaselineId: string,
     *     SnapshotId?: string,
     *     InstallOverrideList?: string,
     *     OwnerInformation?: string,
     *     InstalledCount?: int,
     *     InstalledOtherCount?: int,
     *     InstalledPendingRebootCount?: int,
     *     InstalledRejectedCount?: int,
     *     MissingCount?: int,
     *     FailedCount?: int,
     *     UnreportedNotApplicableCount?: int,
     *     NotApplicableCount?: int,
     *     OperationStartTime: \Aws\Api\DateTimeResult,
     *     OperationEndTime: \Aws\Api\DateTimeResult,
     *     Operation: 'Scan'|'Install',
     *     LastNoRebootInstallOperationTime?: \Aws\Api\DateTimeResult,
     *     RebootOption?: 'RebootIfNeeded'|'NoReboot',
     *     CriticalNonCompliantCount?: int,
     *     SecurityNonCompliantCount?: int,
     *     OtherNonCompliantCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
