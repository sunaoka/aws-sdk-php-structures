<?php

namespace Sunaoka\Aws\Structures\PartnerCentralRevenueMeasurement\GetMarketplaceRevenueShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPLOYMENT'|'ORGANIZATION' $AccountType
 * @property int<0, max> $Count
 * @property list<string> $AccountIds
 */
class RevenueShareProductAccountDetail extends Shape
{
    /**
     * @param array{
     *     AccountType: 'DEPLOYMENT'|'ORGANIZATION',
     *     Count: int<0, max>,
     *     AccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
