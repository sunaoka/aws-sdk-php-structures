<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $environmentId
 * @property 'NAS_1' $volumeType
 * @property string $volumeName
 * @property string $description
 * @property Shapes\KxNAS1Configuration $nas1Configuration
 * @property 'SINGLE'|'MULTI' $azMode
 * @property list<string> $availabilityZoneIds
 * @property array<string, string> $tags
 */
class CreateKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     environmentId: string,
     *     volumeType: 'NAS_1',
     *     volumeName: string,
     *     description?: string,
     *     nas1Configuration?: Shapes\KxNAS1Configuration,
     *     azMode: 'SINGLE'|'MULTI',
     *     availabilityZoneIds: list<string>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
