<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_FOR_PRIVATE_OFFER'|'REQUEST_FOR_DEMO'|'EXPRESS_PRIVATE_OFFER'|'BUY_NOW'|'TRY_FOR_FREE' $engagementType
 * @property 'LINK' $contentType
 * @property string $value
 */
class SellerEngagement extends Shape
{
    /**
     * @param array{
     *     engagementType: 'REQUEST_FOR_PRIVATE_OFFER'|'REQUEST_FOR_DEMO'|'EXPRESS_PRIVATE_OFFER'|'BUY_NOW'|'TRY_FOR_FREE',
     *     contentType: 'LINK',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
