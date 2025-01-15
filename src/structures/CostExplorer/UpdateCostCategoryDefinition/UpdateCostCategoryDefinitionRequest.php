<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CostCategoryArn
 * @property string|null $EffectiveStart
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<Shapes\CostCategoryRule> $Rules
 * @property string|null $DefaultValue
 * @property list<Shapes\CostCategorySplitChargeRule>|null $SplitChargeRules
 */
class UpdateCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveStart?: string|null,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<Shapes\CostCategoryRule>,
     *     DefaultValue?: string|null,
     *     SplitChargeRules?: list<Shapes\CostCategorySplitChargeRule>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
