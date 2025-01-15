<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSubscribedWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property string|null $MarketplaceTitle
 * @property string|null $SellerName
 * @property string|null $MarketplaceDescription
 * @property string|null $ListingId
 */
class SubscribedWorkteam extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     MarketplaceTitle?: string|null,
     *     SellerName?: string|null,
     *     MarketplaceDescription?: string|null,
     *     ListingId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
