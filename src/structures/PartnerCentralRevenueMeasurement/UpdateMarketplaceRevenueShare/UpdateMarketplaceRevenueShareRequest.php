<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\UpdateMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $Identifier
 * @property string|null $ClientToken
 * @property string $Revision
 * @property list<Shapes\MarketplaceRevenueShareProductEntry> $Products
 */
class UpdateMarketplaceRevenueShareRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     Identifier: string,
     *     ClientToken?: string|null,
     *     Revision: string,
     *     Products: list<Shapes\MarketplaceRevenueShareProductEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
