<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapshotPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $SnapshotPolicyId
 * @property string|null $FileSystemId
 * @property string|null $StorageVirtualMachineId
 * @property string|null $Name
 * @property bool|null $Enabled
 * @property list<SnapshotPolicySchedule>|null $Schedules
 * @property 'FILESYSTEM'|'SVM'|null $Scope
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Lifecycle
 * @property string|null $UUID
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 */
class SnapshotPolicy extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     SnapshotPolicyId?: string|null,
     *     FileSystemId?: string|null,
     *     StorageVirtualMachineId?: string|null,
     *     Name?: string|null,
     *     Enabled?: bool|null,
     *     Schedules?: list<SnapshotPolicySchedule>|null,
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
