<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InventoryFilter> $Filters
 * @property list<Shapes\InventoryAggregator> $Aggregators
 * @property list<Shapes\ResultAttribute> $ResultAttributes
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class GetInventoryRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\InventoryFilter>,
     *     Aggregators?: list<Shapes\InventoryAggregator>,
     *     ResultAttributes?: list<Shapes\ResultAttribute>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
