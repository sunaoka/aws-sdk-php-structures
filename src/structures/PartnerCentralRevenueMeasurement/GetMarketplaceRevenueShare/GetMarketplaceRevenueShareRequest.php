<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS'|'Sandbox' $Catalog
 * @property string $ProductId
 * @property int<1, max>|null $Revision
 */
class GetMarketplaceRevenueShareRequest extends Request
{
    /**
     * @param array{
     *     Catalog: 'AWS'|'Sandbox',
     *     ProductId: string,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
