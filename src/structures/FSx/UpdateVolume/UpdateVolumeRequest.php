<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $VolumeId
 * @property Shapes\UpdateOntapVolumeConfiguration $OntapConfiguration
 * @property string $Name
 * @property Shapes\UpdateOpenZFSVolumeConfiguration $OpenZFSConfiguration
 */
class UpdateVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     VolumeId: string,
     *     OntapConfiguration?: Shapes\UpdateOntapVolumeConfiguration,
     *     Name?: string,
     *     OpenZFSConfiguration?: Shapes\UpdateOpenZFSVolumeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
