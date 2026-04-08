<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateRenewal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null $PaymentOption
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null $PaymentTerm
 * @property string|null $OutpostId
 * @property float|null $UpfrontPrice
 * @property float|null $MonthlyRecurringPrice
 */
class CreateRenewalResponse extends Response
{
}
