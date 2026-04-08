<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_FOR_PRIVATE_OFFER'|'REQUEST_FOR_DEMO' $engagementType
 * @property 'LINK' $contentType
 * @property string $value
 */
class SellerEngagement extends Shape
{
    /**
     * @param array{
     *     engagementType: 'REQUEST_FOR_PRIVATE_OFFER'|'REQUEST_FOR_DEMO',
     *     contentType: 'LINK',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
