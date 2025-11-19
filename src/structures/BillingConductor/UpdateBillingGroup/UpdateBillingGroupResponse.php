<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $PrimaryAccountId
 * @property string|null $PricingPlanArn
 * @property int<0, max>|null $Size
 * @property int|null $LastModifiedTime
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|'PENDING'|null $Status
 * @property string|null $StatusReason
 * @property Shapes\UpdateBillingGroupAccountGrouping|null $AccountGrouping
 */
class UpdateBillingGroupResponse extends Response
{
}
