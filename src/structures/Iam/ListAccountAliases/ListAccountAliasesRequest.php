<?php

namespace Sunaoka\Aws\Structures\Iam\ListAccountAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListAccountAliasesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
