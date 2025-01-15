<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $VolumeId
 * @property Shapes\DeleteVolumeOntapConfiguration|null $OntapConfiguration
 * @property Shapes\DeleteVolumeOpenZFSConfiguration|null $OpenZFSConfiguration
 */
class DeleteVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     VolumeId: string,
     *     OntapConfiguration?: Shapes\DeleteVolumeOntapConfiguration|null,
     *     OpenZFSConfiguration?: Shapes\DeleteVolumeOpenZFSConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
