<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FileSystemId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE'|null $Lifecycle
 * @property string|null $Name
 * @property OntapVolumeConfiguration|null $OntapConfiguration
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property string|null $VolumeId
 * @property 'ONTAP'|'OPENZFS'|null $VolumeType
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property list<AdministrativeAction>|null $AdministrativeActions
 * @property OpenZFSVolumeConfiguration|null $OpenZFSConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE'|null,
     *     Name?: string|null,
     *     OntapConfiguration?: OntapVolumeConfiguration|null,
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     VolumeId?: string|null,
     *     VolumeType?: 'ONTAP'|'OPENZFS'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     AdministrativeActions?: list<AdministrativeAction>|null,
     *     OpenZFSConfiguration?: OpenZFSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
