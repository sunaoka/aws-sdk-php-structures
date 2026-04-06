<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountPlanState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accountId
 * @property 'FREE'|'PAID' $accountPlanType
 * @property 'NOT_STARTED'|'ACTIVE'|'EXPIRED' $accountPlanStatus
 * @property Shapes\MonetaryAmount|null $accountPlanRemainingCredits
 * @property \Aws\Api\DateTimeResult|null $accountPlanExpirationDate
 */
class GetAccountPlanStateResponse extends Response
{
}
