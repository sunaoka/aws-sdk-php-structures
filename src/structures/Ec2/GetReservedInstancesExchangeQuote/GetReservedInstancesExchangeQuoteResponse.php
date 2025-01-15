<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CurrencyCode
 * @property bool|null $IsValidExchange
 * @property \Aws\Api\DateTimeResult|null $OutputReservedInstancesWillExpireAt
 * @property string|null $PaymentDue
 * @property Shapes\ReservationValue|null $ReservedInstanceValueRollup
 * @property list<Shapes\ReservedInstanceReservationValue>|null $ReservedInstanceValueSet
 * @property Shapes\ReservationValue|null $TargetConfigurationValueRollup
 * @property list<Shapes\TargetReservationValue>|null $TargetConfigurationValueSet
 * @property string|null $ValidationFailureReason
 */
class GetReservedInstancesExchangeQuoteResponse extends Response
{
}
