<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccountAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListAccountAliasesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
