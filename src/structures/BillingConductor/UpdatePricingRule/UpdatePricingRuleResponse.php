<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdatePricingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property 'GLOBAL'|'SERVICE'|'BILLING_ENTITY'|'SKU' $Scope
 * @property 'MARKUP'|'DISCOUNT'|'TIERING' $Type
 * @property double $ModifierPercentage
 * @property string $Service
 * @property int<0, max> $AssociatedPricingPlanCount
 * @property int $LastModifiedTime
 * @property string $BillingEntity
 * @property Shapes\UpdateTieringInput $Tiering
 * @property string $UsageType
 * @property string $Operation
 */
class UpdatePricingRuleResponse extends Response
{
}
