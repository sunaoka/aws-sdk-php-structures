<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CostCategoryArn
 * @property string $EffectiveStart
 * @property string|null $EffectiveEnd
 * @property string $Name
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<CostCategoryRule> $Rules
 * @property list<CostCategorySplitChargeRule>|null $SplitChargeRules
 * @property list<CostCategoryProcessingStatus>|null $ProcessingStatus
 * @property string|null $DefaultValue
 */
class CostCategory extends Shape
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveStart: string,
     *     EffectiveEnd?: string|null,
     *     Name: string,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<CostCategoryRule>,
     *     SplitChargeRules?: list<CostCategorySplitChargeRule>|null,
     *     ProcessingStatus?: list<CostCategoryProcessingStatus>|null,
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
