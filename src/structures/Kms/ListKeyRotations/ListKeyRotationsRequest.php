<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 */
class ListKeyRotationsRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
