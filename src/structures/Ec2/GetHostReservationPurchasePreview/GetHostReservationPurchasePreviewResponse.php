<?php

namespace Sunaoka\Aws\Structures\Ec2\GetHostReservationPurchasePreview;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'USD'|null $CurrencyCode
 * @property list<Shapes\Purchase>|null $Purchase
 * @property string|null $TotalHourlyPrice
 * @property string|null $TotalUpfrontPrice
 */
class GetHostReservationPurchasePreviewResponse extends Response
{
}
