<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $Limit
 * @property string $Marker
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
