<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property 'ONTAP'|'OPENZFS' $VolumeType
 * @property string $Name
 * @property Shapes\CreateOntapVolumeConfiguration $OntapConfiguration
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\CreateOpenZFSVolumeConfiguration $OpenZFSConfiguration
 */
class CreateVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     VolumeType: 'ONTAP'|'OPENZFS',
     *     Name: string,
     *     OntapConfiguration?: Shapes\CreateOntapVolumeConfiguration,
     *     Tags?: list<Shapes\Tag>,
     *     OpenZFSConfiguration?: Shapes\CreateOpenZFSVolumeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
