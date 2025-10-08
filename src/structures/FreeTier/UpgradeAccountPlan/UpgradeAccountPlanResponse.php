<?php

namespace Sunaoka\Aws\Structures\FreeTier\UpgradeAccountPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $accountId
 * @property 'FREE'|'PAID' $accountPlanType
 * @property 'NOT_STARTED'|'ACTIVE'|'EXPIRED' $accountPlanStatus
 */
class UpgradeAccountPlanResponse extends Response
{
}
