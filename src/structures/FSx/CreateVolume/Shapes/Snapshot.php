<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property string $SnapshotId
 * @property string $Name
 * @property string $VolumeId
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE' $Lifecycle
 * @property LifecycleTransitionReason $LifecycleTransitionReason
 * @property list<Tag> $Tags
 * @property list<AdministrativeAction> $AdministrativeActions
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string,
     *     SnapshotId?: string,
     *     Name?: string,
     *     VolumeId?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     Lifecycle?: 'PENDING'|'CREATING'|'DELETING'|'AVAILABLE',
     *     LifecycleTransitionReason?: LifecycleTransitionReason,
     *     Tags?: list<Tag>,
     *     AdministrativeActions?: list<AdministrativeAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
