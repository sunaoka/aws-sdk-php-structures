<?php

namespace Sunaoka\Aws\Structures\Ssm\GetInventory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\InventoryFilter>|null $Filters
 * @property list<Shapes\InventoryAggregator>|null $Aggregators
 * @property list<Shapes\ResultAttribute>|null $ResultAttributes
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class GetInventoryRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\InventoryFilter>|null,
     *     Aggregators?: list<Shapes\InventoryAggregator>|null,
     *     ResultAttributes?: list<Shapes\ResultAttribute>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
