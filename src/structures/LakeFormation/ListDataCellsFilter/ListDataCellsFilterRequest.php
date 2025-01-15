<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TableResource|null $Table
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataCellsFilterRequest extends Request
{
    /**
     * @param array{
     *     Table?: Shapes\TableResource|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
