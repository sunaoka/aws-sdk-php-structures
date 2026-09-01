<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $chargeDateOffset
 * @property string $chargePercentage
 * @property int<1, 31>|null $dayOfMonth
 */
class PaymentScheduleEntry extends Shape
{
    /**
     * @param array{
     *     chargeDateOffset: string,
     *     chargePercentage: string,
     *     dayOfMonth?: int<1, 31>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
