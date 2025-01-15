<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MasterRegion
 * @property 'ALL'|null $FunctionVersion
 * @property string|null $Marker
 * @property int<1, 10000>|null $MaxItems
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     MasterRegion?: string|null,
     *     FunctionVersion?: 'ALL'|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
