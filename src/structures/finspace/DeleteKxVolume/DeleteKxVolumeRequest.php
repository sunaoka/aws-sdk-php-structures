<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $volumeName
 * @property string $clientToken
 */
class DeleteKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     volumeName: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
