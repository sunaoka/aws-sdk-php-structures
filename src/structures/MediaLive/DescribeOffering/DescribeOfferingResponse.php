<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeOffering;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\ReservationResourceSpecification $ResourceSpecification
 * @property double $UsagePrice
 */
class DescribeOfferingResponse extends Response
{
}
