<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseHostReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClientToken
 * @property 'USD' $CurrencyCode
 * @property list<Shapes\Purchase> $Purchase
 * @property string $TotalHourlyPrice
 * @property string $TotalUpfrontPrice
 */
class PurchaseHostReservationResponse extends Response
{
}
