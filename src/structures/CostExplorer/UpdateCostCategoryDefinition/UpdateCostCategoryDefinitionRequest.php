<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CostCategoryArn
 * @property string $EffectiveStart
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<Shapes\CostCategoryRule> $Rules
 * @property string $DefaultValue
 * @property list<Shapes\CostCategorySplitChargeRule> $SplitChargeRules
 */
class UpdateCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveStart?: string,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<Shapes\CostCategoryRule>,
     *     DefaultValue?: string,
     *     SplitChargeRules?: list<Shapes\CostCategorySplitChargeRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
