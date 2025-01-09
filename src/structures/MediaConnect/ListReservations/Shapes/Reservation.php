<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CurrencyCode
 * @property int $Duration
 * @property 'MONTHS' $DurationUnits
 * @property string $End
 * @property string $OfferingArn
 * @property string $OfferingDescription
 * @property string $PricePerUnit
 * @property 'HOURLY' $PriceUnits
 * @property string $ReservationArn
 * @property string $ReservationName
 * @property 'ACTIVE'|'EXPIRED'|'PROCESSING'|'CANCELED' $ReservationState
 * @property ResourceSpecification $ResourceSpecification
 * @property string $Start
 */
class Reservation extends Shape
{
    /**
     * @param array{
     *     CurrencyCode: string,
     *     Duration: int,
     *     DurationUnits: 'MONTHS',
     *     End: string,
     *     OfferingArn: string,
     *     OfferingDescription: string,
     *     PricePerUnit: string,
     *     PriceUnits: 'HOURLY',
     *     ReservationArn: string,
     *     ReservationName: string,
     *     ReservationState: 'ACTIVE'|'EXPIRED'|'PROCESSING'|'CANCELED',
     *     ResourceSpecification: ResourceSpecification,
     *     Start: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
