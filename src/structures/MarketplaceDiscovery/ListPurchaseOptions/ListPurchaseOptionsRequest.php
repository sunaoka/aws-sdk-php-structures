<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListPurchaseOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\PurchaseOptionFilter>|null $filters
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListPurchaseOptionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\PurchaseOptionFilter>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
