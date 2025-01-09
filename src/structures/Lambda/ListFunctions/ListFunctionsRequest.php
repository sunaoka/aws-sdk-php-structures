<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MasterRegion
 * @property 'ALL' $FunctionVersion
 * @property string $Marker
 * @property int<1, 10000> $MaxItems
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     MasterRegion?: string,
     *     FunctionVersion?: 'ALL',
     *     Marker?: string,
     *     MaxItems?: int<1, 10000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
