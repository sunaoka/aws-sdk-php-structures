<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 * @property 'NAS_1' $volumeType
 * @property string $volumeName
 * @property string|null $description
 * @property Shapes\KxNAS1Configuration|null $nas1Configuration
 * @property 'SINGLE'|'MULTI' $azMode
 * @property list<string> $availabilityZoneIds
 * @property array<string, string>|null $tags
 */
class CreateKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string,
     *     volumeType: 'NAS_1',
     *     volumeName: string,
     *     description?: string|null,
     *     nas1Configuration?: Shapes\KxNAS1Configuration|null,
     *     azMode: 'SINGLE'|'MULTI',
     *     availabilityZoneIds: list<string>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
