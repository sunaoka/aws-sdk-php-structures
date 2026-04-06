<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxVolume;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $volumeName
 */
class GetKxVolumeRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     volumeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
