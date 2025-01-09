<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListDataCellsFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TableResource $Table
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDataCellsFilterRequest extends Request
{
    /**
     * @param array{
     *     Table?: Shapes\TableResource,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
