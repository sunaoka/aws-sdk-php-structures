<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeOffering;

use Sunaoka\Aws\Structures\Response;

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
 * @property Shapes\ReservationResourceSpecification|null $ResourceSpecification
 * @property double|null $UsagePrice
 */
class DescribeOfferingResponse extends Response
{
}
