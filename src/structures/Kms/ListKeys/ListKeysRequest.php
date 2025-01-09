<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $Marker
 */
class ListKeysRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
