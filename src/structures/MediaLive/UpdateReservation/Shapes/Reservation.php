<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int|null $Count
 * @property string|null $CurrencyCode
 * @property int|null $Duration
 * @property 'MONTHS'|null $DurationUnits
 * @property string|null $End
 * @property double|null $FixedPrice
 * @property string|null $Name
 * @property string|null $OfferingDescription
 * @property string|null $OfferingId
 * @property 'NO_UPFRONT'|null $OfferingType
 * @property string|null $Region
 * @property RenewalSettings|null $RenewalSettings
 * @property string|null $ReservationId
 * @property ReservationResourceSpecification|null $ResourceSpecification
 * @property string|null $Start
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property double|null $UsagePrice
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Count?: int|null,
     *     CurrencyCode?: string|null,
     *     Duration?: int|null,
     *     DurationUnits?: 'MONTHS'|null,
     *     End?: string|null,
     *     FixedPrice?: double|null,
     *     Name?: string|null,
     *     OfferingDescription?: string|null,
     *     OfferingId?: string|null,
     *     OfferingType?: 'NO_UPFRONT'|null,
     *     Region?: string|null,
     *     RenewalSettings?: RenewalSettings|null,
     *     ReservationId?: string|null,
     *     ResourceSpecification?: ReservationResourceSpecification|null,
     *     Start?: string|null,
     *     State?: 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED'|null,
     *     Tags?: array<string, string>|null,
     *     UsagePrice?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
