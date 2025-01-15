<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstancePatchStatesForPatchGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $PatchGroup
 * @property string $BaselineId
 * @property string|null $SnapshotId
 * @property string|null $InstallOverrideList
 * @property string|null $OwnerInformation
 * @property int|null $InstalledCount
 * @property int|null $InstalledOtherCount
 * @property int|null $InstalledPendingRebootCount
 * @property int|null $InstalledRejectedCount
 * @property int|null $MissingCount
 * @property int|null $FailedCount
 * @property int|null $UnreportedNotApplicableCount
 * @property int|null $NotApplicableCount
 * @property \Aws\Api\DateTimeResult $OperationStartTime
 * @property \Aws\Api\DateTimeResult $OperationEndTime
 * @property 'Scan'|'Install' $Operation
 * @property \Aws\Api\DateTimeResult|null $LastNoRebootInstallOperationTime
 * @property 'RebootIfNeeded'|'NoReboot'|null $RebootOption
 * @property int|null $CriticalNonCompliantCount
 * @property int|null $SecurityNonCompliantCount
 * @property int|null $OtherNonCompliantCount
 */
class InstancePatchState extends Shape
{
    /**
     * @param array{
     *     InstanceId: string,
     *     PatchGroup: string,
     *     BaselineId: string,
     *     SnapshotId?: string|null,
     *     InstallOverrideList?: string|null,
     *     OwnerInformation?: string|null,
     *     InstalledCount?: int|null,
     *     InstalledOtherCount?: int|null,
     *     InstalledPendingRebootCount?: int|null,
     *     InstalledRejectedCount?: int|null,
     *     MissingCount?: int|null,
     *     FailedCount?: int|null,
     *     UnreportedNotApplicableCount?: int|null,
     *     NotApplicableCount?: int|null,
     *     OperationStartTime: \Aws\Api\DateTimeResult,
     *     OperationEndTime: \Aws\Api\DateTimeResult,
     *     Operation: 'Scan'|'Install',
     *     LastNoRebootInstallOperationTime?: \Aws\Api\DateTimeResult|null,
     *     RebootOption?: 'RebootIfNeeded'|'NoReboot'|null,
     *     CriticalNonCompliantCount?: int|null,
     *     SecurityNonCompliantCount?: int|null,
     *     OtherNonCompliantCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
