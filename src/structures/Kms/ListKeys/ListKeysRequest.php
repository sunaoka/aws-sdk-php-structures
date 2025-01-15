<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
