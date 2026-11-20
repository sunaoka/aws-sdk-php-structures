<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\CreateMarketplaceRevenueShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPLOYMENT'|'ORGANIZATION' $AccountType
 * @property list<string> $AccountIds
 */
class RevenueShareProductAccountEntry extends Shape
{
    /**
     * @param array{
     *     AccountType: 'DEPLOYMENT'|'ORGANIZATION',
     *     AccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
