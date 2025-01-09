<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TableResource $Table
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListDataCellsFilterRequest extends Request
{
    /**
     * @param array{
     *     Table?: Shapes\TableResource,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
