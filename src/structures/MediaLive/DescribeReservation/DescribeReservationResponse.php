<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeReservation;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\RenewalSettings $RenewalSettings
 * @property string $ReservationId
 * @property Shapes\ReservationResourceSpecification $ResourceSpecification
 * @property string $Start
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED' $State
 * @property array<string, string> $Tags
 * @property double $UsagePrice
 */
class DescribeReservationResponse extends Response
{
}
