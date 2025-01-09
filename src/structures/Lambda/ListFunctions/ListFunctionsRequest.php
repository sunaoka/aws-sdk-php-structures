<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MasterRegion
 * @property 'ALL' $FunctionVersion
 * @property string $Marker
 * @property int $MaxItems
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     MasterRegion?: string,
     *     FunctionVersion?: 'ALL',
     *     Marker?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
