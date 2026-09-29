<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $billingMonth
 * @property bool $isEstimated
 * @property string $totalSupportCharge
 * @property string $totalSupportEligibleSpend
 * @property int $accountCount
 * @property list<Shapes\BusinessSupportAccountCharge> $accountCharges
 * @property string|null $nextToken
 */
class ListBusinessSupportAccountChargesResponse extends Response
{
}
