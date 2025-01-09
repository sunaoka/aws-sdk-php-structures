<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CurrencyCode
 * @property bool $IsValidExchange
 * @property \Aws\Api\DateTimeResult $OutputReservedInstancesWillExpireAt
 * @property string $PaymentDue
 * @property Shapes\ReservationValue $ReservedInstanceValueRollup
 * @property list<Shapes\ReservedInstanceReservationValue> $ReservedInstanceValueSet
 * @property Shapes\ReservationValue $TargetConfigurationValueRollup
 * @property list<Shapes\TargetReservationValue> $TargetConfigurationValueSet
 * @property string $ValidationFailureReason
 */
class GetReservedInstancesExchangeQuoteResponse extends Response
{
}
