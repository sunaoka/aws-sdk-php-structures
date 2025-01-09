<?php

namespace Sunaoka\Aws\Structures\Kms\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property int $Limit
 * @property string $Marker
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     KeyId?: string,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
