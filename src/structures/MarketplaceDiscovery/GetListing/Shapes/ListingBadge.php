<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property 'AWS_FREE_TIER'|'FREE_TRIAL'|'DEPLOYED_ON_AWS'|'QUICK_LAUNCH'|'MULTI_PRODUCT' $badgeType
 */
class ListingBadge extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     badgeType: 'AWS_FREE_TIER'|'FREE_TRIAL'|'DEPLOYED_ON_AWS'|'QUICK_LAUNCH'|'MULTI_PRODUCT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
