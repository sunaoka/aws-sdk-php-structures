<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $volumeName
 * @property string|null $clientToken
 */
class DeleteKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     volumeName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
