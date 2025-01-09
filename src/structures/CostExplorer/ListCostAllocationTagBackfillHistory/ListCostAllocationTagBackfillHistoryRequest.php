<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostAllocationTagBackfillHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListCostAllocationTagBackfillHistoryRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
