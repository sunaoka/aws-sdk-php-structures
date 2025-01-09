<?php

namespace Sunaoka\Aws\Structures\Kms\UpdatePrimaryRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $PrimaryRegion
 */
class UpdatePrimaryRegionRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     PrimaryRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
