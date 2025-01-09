<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EffectiveStart
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<Shapes\CostCategoryRule> $Rules
 * @property string $DefaultValue
 * @property list<Shapes\CostCategorySplitChargeRule> $SplitChargeRules
 * @property list<Shapes\ResourceTag> $ResourceTags
 */
class CreateCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EffectiveStart?: string,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<Shapes\CostCategoryRule>,
     *     DefaultValue?: string,
     *     SplitChargeRules?: list<Shapes\CostCategorySplitChargeRule>,
     *     ResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
