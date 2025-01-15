<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU'|null $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING'|null $Type
 * @property double|null $ModifierPercentage
 * @property string|null $Service
 * @property int<0, max>|null $AssociatedPricingPlanCount
 * @property int|null $LastModifiedTime
 * @property string|null $BillingEntity
 * @property Shapes\UpdateTieringInput|null $Tiering
 * @property string|null $UsageType
 * @property string|null $Operation
 */
class UpdatePricingRuleResponse extends Response
{
}
