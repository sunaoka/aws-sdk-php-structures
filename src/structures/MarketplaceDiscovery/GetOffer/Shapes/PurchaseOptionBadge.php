<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOffer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property 'PRIVATE_PRICING'|'FUTURE_DATED'|'REPLACEMENT_OFFER' $badgeType
 */
class PurchaseOptionBadge extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     badgeType: 'PRIVATE_PRICING'|'FUTURE_DATED'|'REPLACEMENT_OFFER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
