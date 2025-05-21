<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $currencyCode
 * @property int|null $duration
 * @property double|null $hourlyCharge
 * @property string|null $offeringId
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|null $offeringType
 * @property double|null $upfrontCharge
 */
class ReservationOffering extends Shape
{
    /**
     * @param array{
     *     currencyCode?: string|null,
     *     duration?: int|null,
     *     hourlyCharge?: double|null,
     *     offeringId?: string|null,
     *     offeringType?: 'ALL_UPFRONT'|'NO_UPFRONT'|null,
     *     upfrontCharge?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
