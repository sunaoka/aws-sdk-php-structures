<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $SnapmirrorPolicyId
 * @property string|null $FileSystemId
 * @property string|null $StorageVirtualMachineId
 * @property string|null $Name
 * @property 'COPY_ALL_SOURCE_SNAPSHOTS'|'COPY_LATEST_SOURCE_SNAPSHOT'|'NO_CREATE_SNAPSHOT_ON_SOURCE'|null $SnapshotCopyMode
 * @property list<SnapmirrorPolicyRetentionRule>|null $RetentionRules
 * @property string|null $TransferSchedule
 * @property bool|null $NetworkCompressionEnabled
 * @property int<0, max>|null $ThrottleInKbps
 * @property 'FILESYSTEM'|'SVM'|null $Scope
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Lifecycle
 * @property string|null $UUID
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 */
class SnapmirrorPolicy extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     SnapmirrorPolicyId?: string|null,
     *     FileSystemId?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     Name?: string|null,
     *     SnapshotCopyMode?: 'COPY_ALL_SOURCE_SNAPSHOTS'|'COPY_LATEST_SOURCE_SNAPSHOT'|'NO_CREATE_SNAPSHOT_ON_SOURCE'|null,
     *     RetentionRules?: list<SnapmirrorPolicyRetentionRule>|null,
     *     TransferSchedule?: string|null,
     *     NetworkCompressionEnabled?: bool|null,
     *     ThrottleInKbps?: int<0, max>|null,
     *     Scope?: 'FILESYSTEM'|'SVM'|null,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null,
     *     UUID?: string|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
