<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $FunctionVersion
 * @property string $Marker
 * @property int<1, 10000> $MaxItems
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     FunctionVersion?: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
