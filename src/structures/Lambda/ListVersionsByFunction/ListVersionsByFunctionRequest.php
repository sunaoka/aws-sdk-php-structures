<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Marker
 * @property int<1, 10000> $MaxItems
 */
class ListVersionsByFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
