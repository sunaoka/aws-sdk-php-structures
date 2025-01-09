<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctionEventInvokeConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Marker
 * @property int $MaxItems
 */
class ListFunctionEventInvokeConfigsRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
