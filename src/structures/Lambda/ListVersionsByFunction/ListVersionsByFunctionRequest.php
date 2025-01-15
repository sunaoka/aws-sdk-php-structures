<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string|null $Marker
 * @property int<1, 10000>|null $MaxItems
 */
class ListVersionsByFunctionRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
