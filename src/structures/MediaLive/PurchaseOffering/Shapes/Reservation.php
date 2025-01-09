<?php

namespace Sunaoka\Aws\Structures\MediaLive\PurchaseOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int $Count
 * @property string $CurrencyCode
 * @property int $Duration
 * @property 'MONTHS' $DurationUnits
 * @property string $End
 * @property double $FixedPrice
 * @property string $Name
 * @property string $OfferingDescription
 * @property string $OfferingId
 * @property 'NO_UPFRONT' $OfferingType
 * @property string $Region
 * @property RenewalSettings $RenewalSettings
 * @property string $ReservationId
 * @property ReservationResourceSpecification $ResourceSpecification
 * @property string $Start
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property double $UsagePrice
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Count?: int,
     *     CurrencyCode?: string,
     *     Duration?: int,
     *     DurationUnits?: 'MONTHS',
     *     End?: string,
     *     FixedPrice?: double,
     *     Name?: string,
     *     OfferingDescription?: string,
     *     OfferingId?: string,
     *     OfferingType?: 'NO_UPFRONT',
     *     Region?: string,
     *     RenewalSettings?: RenewalSettings,
     *     ReservationId?: string,
     *     ResourceSpecification?: ReservationResourceSpecification,
     *     Start?: string,
     *     State?: 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED',
     *     Tags?: array<string, string>,
     *     UsagePrice?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
