<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $volumeName
 * @property string $description
 * @property string $clientToken
 * @property Shapes\KxNAS1Configuration $nas1Configuration
 */
class UpdateKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     volumeName: string,
     *     description?: string,
     *     clientToken?: string,
     *     nas1Configuration?: Shapes\KxNAS1Configuration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
