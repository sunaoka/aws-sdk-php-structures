<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\RenewalSettings|null $RenewalSettings
 * @property string|null $ReservationId
 * @property Shapes\ReservationResourceSpecification|null $ResourceSpecification
 * @property string|null $Start
 * @property 'ACTIVE'|'EXPIRED'|'CANCELED'|'DELETED'|null $State
 * @property array<string, string>|null $Tags
 * @property double|null $UsagePrice
 */
class DeleteReservationResponse extends Response
{
}
