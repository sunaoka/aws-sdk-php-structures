<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $VolumeId
 * @property Shapes\UpdateOntapVolumeConfiguration|null $OntapConfiguration
 * @property string|null $Name
 * @property Shapes\UpdateOpenZFSVolumeConfiguration|null $OpenZFSConfiguration
 */
class UpdateVolumeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     VolumeId: string,
     *     OntapConfiguration?: Shapes\UpdateOntapVolumeConfiguration|null,
     *     Name?: string|null,
     *     OpenZFSConfiguration?: Shapes\UpdateOpenZFSVolumeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
