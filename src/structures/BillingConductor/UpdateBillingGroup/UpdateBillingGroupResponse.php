<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property string $PrimaryAccountId
 * @property string $PricingPlanArn
 * @property int<0, max> $Size
 * @property int $LastModifiedTime
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING' $Status
 * @property string $StatusReason
 * @property Shapes\UpdateBillingGroupAccountGrouping $AccountGrouping
 */
class UpdateBillingGroupResponse extends Response
{
}
