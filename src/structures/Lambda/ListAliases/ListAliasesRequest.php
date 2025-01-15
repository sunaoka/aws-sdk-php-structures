<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $FunctionVersion
 * @property string|null $Marker
 * @property int<1, 10000>|null $MaxItems
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     FunctionVersion?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
