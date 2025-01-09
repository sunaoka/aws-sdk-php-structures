<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $FunctionVersion
 * @property string $Marker
 * @property int $MaxItems
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     FunctionVersion?: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
