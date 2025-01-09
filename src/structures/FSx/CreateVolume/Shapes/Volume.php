<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FileSystemId
 * @property 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE' $Lifecycle
 * @property string $Name
 * @property OntapVolumeConfiguration $OntapConfiguration
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property string $VolumeId
 * @property 'ONTAP'|'OPENZFS' $VolumeType
 * @property LifecycleTransitionReason $LifecycleTransitionReason
 * @property list<AdministrativeAction> $AdministrativeActions
 * @property OpenZFSVolumeConfiguration $OpenZFSConfiguration
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FileSystemId?: string,
     *     Lifecycle?: 'CREATING'|'CREATED'|'DELETING'|'FAILED'|'MISCONFIGURED'|'PENDING'|'AVAILABLE',
     *     Name?: string,
     *     OntapConfiguration?: OntapVolumeConfiguration,
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     VolumeId?: string,
     *     VolumeType?: 'ONTAP'|'OPENZFS',
     *     LifecycleTransitionReason?: LifecycleTransitionReason,
     *     AdministrativeActions?: list<AdministrativeAction>,
     *     OpenZFSConfiguration?: OpenZFSVolumeConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
