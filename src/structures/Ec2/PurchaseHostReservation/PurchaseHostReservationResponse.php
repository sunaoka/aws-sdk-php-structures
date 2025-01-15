<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClientToken
 * @property 'USD'|null $CurrencyCode
 * @property list<Shapes\Purchase>|null $Purchase
 * @property string|null $TotalHourlyPrice
 * @property string|null $TotalUpfrontPrice
 */
class PurchaseHostReservationResponse extends Response
{
}
