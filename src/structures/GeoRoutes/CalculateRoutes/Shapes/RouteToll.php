<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Country
 * @property list<RouteTollPaymentSite> $PaymentSites
 * @property list<RouteTollRate> $Rates
 * @property list<int> $Systems
 */
class RouteToll extends Shape
{
    /**
     * @param array{
     *     Country?: string,
     *     PaymentSites: list<RouteTollPaymentSite>,
     *     Rates: list<RouteTollRate>,
     *     Systems: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
