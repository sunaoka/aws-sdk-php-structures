<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $CurrencyCode
 * @property int|null $Duration
 * @property 'MONTHS'|null $DurationUnits
 * @property double|null $FixedPrice
 * @property string|null $OfferingDescription
 * @property string|null $OfferingId
 * @property 'NO_UPFRONT'|null $OfferingType
 * @property string|null $Region
 * @property ReservationResourceSpecification|null $ResourceSpecification
 * @property double|null $UsagePrice
 */
class Offering extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CurrencyCode?: string|null,
     *     Duration?: int|null,
     *     DurationUnits?: 'MONTHS'|null,
     *     FixedPrice?: double|null,
     *     OfferingDescription?: string|null,
     *     OfferingId?: string|null,
     *     OfferingType?: 'NO_UPFRONT'|null,
     *     Region?: string|null,
     *     ResourceSpecification?: ReservationResourceSpecification|null,
     *     UsagePrice?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
