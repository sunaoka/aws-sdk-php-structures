<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionUrlConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Marker
 * @property int<1, 50>|null $MaxItems
 */
class ListFunctionUrlConfigsRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
