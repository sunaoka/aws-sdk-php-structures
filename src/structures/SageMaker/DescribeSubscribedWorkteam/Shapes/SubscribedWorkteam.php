<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSubscribedWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property string $MarketplaceTitle
 * @property string $SellerName
 * @property string $MarketplaceDescription
 * @property string $ListingId
 */
class SubscribedWorkteam extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     MarketplaceTitle?: string,
     *     SellerName?: string,
     *     MarketplaceDescription?: string,
     *     ListingId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
