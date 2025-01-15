<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicableTimes
 * @property RouteTollPrice|null $ConvertedPrice
 * @property string $Id
 * @property RouteTollPrice $LocalPrice
 * @property string $Name
 * @property RouteTollPass|null $Pass
 * @property list<'BankCard'|'Cash'|'CashExact'|'CreditCard'|'PassSubscription'|'TravelCard'|'Transponder'|'VideoToll'> $PaymentMethods
 * @property list<RouteTransponder> $Transponders
 */
class RouteTollRate extends Shape
{
    /**
     * @param array{
     *     ApplicableTimes?: string|null,
     *     ConvertedPrice?: RouteTollPrice|null,
     *     Id: string,
     *     LocalPrice: RouteTollPrice,
     *     Name: string,
     *     Pass?: RouteTollPass|null,
     *     PaymentMethods: list<'BankCard'|'Cash'|'CashExact'|'CreditCard'|'PassSubscription'|'TravelCard'|'Transponder'|'VideoToll'>,
     *     Transponders: list<RouteTransponder>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
