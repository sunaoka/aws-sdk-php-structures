<?php

namespace Sunaoka\Aws\Structures\Kms\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $KeyId
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     KeyId?: string|null,
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
