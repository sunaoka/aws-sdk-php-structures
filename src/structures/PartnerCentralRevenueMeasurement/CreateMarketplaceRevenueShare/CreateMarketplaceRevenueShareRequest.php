<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string|null $ClientToken
 * @property list<Shapes\MarketplaceRevenueShareProductEntry> $Products
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMarketplaceRevenueShareRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ClientToken?: string|null,
     *     Products: list<Shapes\MarketplaceRevenueShareProductEntry>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
