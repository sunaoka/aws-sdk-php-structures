<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CurrencyCode
 * @property int $Duration
 * @property 'MONTHS' $DurationUnits
 * @property double $FixedPrice
 * @property string $OfferingDescription
 * @property string $OfferingId
 * @property 'NO_UPFRONT' $OfferingType
 * @property string $Region
 * @property ReservationResourceSpecification $ResourceSpecification
 * @property double $UsagePrice
 */
class Offering extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CurrencyCode?: string,
     *     Duration?: int,
     *     DurationUnits?: 'MONTHS',
     *     FixedPrice?: double,
     *     OfferingDescription?: string,
     *     OfferingId?: string,
     *     OfferingType?: 'NO_UPFRONT',
     *     Region?: string,
     *     ResourceSpecification?: ReservationResourceSpecification,
     *     UsagePrice?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
