<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CostCategoryArn
 * @property string $EffectiveStart
 * @property string $EffectiveEnd
 * @property string $Name
 * @property 'CostCategoryExpression.v1' $RuleVersion
 * @property list<CostCategoryRule> $Rules
 * @property list<CostCategorySplitChargeRule> $SplitChargeRules
 * @property list<CostCategoryProcessingStatus> $ProcessingStatus
 * @property string $DefaultValue
 */
class CostCategory extends Shape
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveStart: string,
     *     EffectiveEnd?: string,
     *     Name: string,
     *     RuleVersion: 'CostCategoryExpression.v1',
     *     Rules: list<CostCategoryRule>,
     *     SplitChargeRules?: list<CostCategorySplitChargeRule>,
     *     ProcessingStatus?: list<CostCategoryProcessingStatus>,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
