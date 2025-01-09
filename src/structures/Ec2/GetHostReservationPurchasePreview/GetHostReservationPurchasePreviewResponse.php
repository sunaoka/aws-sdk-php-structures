<?php

namespace Sunaoka\Aws\Structures\Ec2\GetHostReservationPurchasePreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'USD' $CurrencyCode
 * @property list<Shapes\Purchase> $Purchase
 * @property string $TotalHourlyPrice
 * @property string $TotalUpfrontPrice
 */
class GetHostReservationPurchasePreviewResponse extends Response
{
}
