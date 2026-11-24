<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property string|null $SnapmirrorRelationshipId
 * @property string|null $FileSystemId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<Tag>|null $Tags
 * @property SnapmirrorSource|null $Source
 * @property SnapmirrorDestination|null $Destination
 * @property SnapmirrorRelationshipPolicy|null $SnapmirrorPolicy
 * @property string|null $TransferSchedule
 * @property int<0, max>|null $ThrottleInKbps
 * @property 'UNINITIALIZED'|'TRANSFERRING'|'SNAPMIRRORED'|'PAUSED'|'BROKEN_OFF'|null $State
 * @property bool|null $Healthy
 * @property string|null $UnhealthyReason
 * @property int<0, max>|null $LagTimeInMinutes
 * @property SnapmirrorExportedSnapshot|null $ExportedSnapshot
 * @property SnapmirrorTransferState|null $TransferState
 * @property string|null $UUID
 */
class SnapmirrorRelationship extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     SnapmirrorRelationshipId?: string|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     Tags?: list<Tag>|null,
     *     Source?: SnapmirrorSource|null,
     *     Destination?: SnapmirrorDestination|null,
     *     SnapmirrorPolicy?: SnapmirrorRelationshipPolicy|null,
     *     TransferSchedule?: string|null,
     *     ThrottleInKbps?: int<0, max>|null,
     *     State?: 'UNINITIALIZED'|'TRANSFERRING'|'SNAPMIRRORED'|'PAUSED'|'BROKEN_OFF'|null,
     *     Healthy?: bool|null,
     *     UnhealthyReason?: string|null,
     *     LagTimeInMinutes?: int<0, max>|null,
     *     ExportedSnapshot?: SnapmirrorExportedSnapshot|null,
     *     TransferState?: SnapmirrorTransferState|null,
     *     UUID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
