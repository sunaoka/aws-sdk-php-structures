<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $volumeName
 * @property string|null $description
 * @property string|null $clientToken
 * @property Shapes\KxNAS1Configuration|null $nas1Configuration
 */
class UpdateKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     volumeName: string,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     nas1Configuration?: Shapes\KxNAS1Configuration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
