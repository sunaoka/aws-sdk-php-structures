<?php

namespace Sunaoka\Aws\Structures\FSx\CreateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property 'ONTAP'|'OPENZFS' $VolumeType
 * @property string $Name
 * @property Shapes\CreateOntapVolumeConfiguration|null $OntapConfiguration
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\CreateOpenZFSVolumeConfiguration|null $OpenZFSConfiguration
 */
class CreateVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     VolumeType: 'ONTAP'|'OPENZFS',
     *     Name: string,
     *     OntapConfiguration?: Shapes\CreateOntapVolumeConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     OpenZFSConfiguration?: Shapes\CreateOpenZFSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
