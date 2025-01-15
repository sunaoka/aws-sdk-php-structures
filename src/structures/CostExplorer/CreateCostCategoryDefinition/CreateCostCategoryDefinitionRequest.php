<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EffectiveStart
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<Shapes\CostCategoryRule> $Rules
 * @property string|null $DefaultValue
 * @property list<Shapes\CostCategorySplitChargeRule>|null $SplitChargeRules
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EffectiveStart?: string|null,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<Shapes\CostCategoryRule>,
     *     DefaultValue?: string|null,
     *     SplitChargeRules?: list<Shapes\CostCategorySplitChargeRule>|null,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
