<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileSystemFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $SnapshotId
 * @property string|null $Name
 * @property string|null $VolumeId
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 * @property list<AdministrativeAction>|null $AdministrativeActions
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     SnapshotId?: string|null,
     *     Name?: string|null,
     *     VolumeId?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Lifecycle?: 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     Tags?: list<Tag>|null,
     *     AdministrativeActions?: list<AdministrativeAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
