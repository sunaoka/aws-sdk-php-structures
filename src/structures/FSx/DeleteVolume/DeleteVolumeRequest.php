<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $VolumeId
 * @property Shapes\DeleteVolumeOntapConfiguration $OntapConfiguration
 * @property Shapes\DeleteVolumeOpenZFSConfiguration $OpenZFSConfiguration
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     VolumeId: string,
     *     OntapConfiguration?: Shapes\DeleteVolumeOntapConfiguration,
     *     OpenZFSConfiguration?: Shapes\DeleteVolumeOpenZFSConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
