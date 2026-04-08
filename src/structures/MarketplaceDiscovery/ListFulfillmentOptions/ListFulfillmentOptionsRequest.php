<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\ListFulfillmentOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListFulfillmentOptionsRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
