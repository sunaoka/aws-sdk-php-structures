<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CostCategoryArn
 * @property string $Name
 * @property string $EffectiveStart
 * @property string $EffectiveEnd
 * @property int<0, max> $NumberOfRules
 * @property list<CostCategoryProcessingStatus> $ProcessingStatus
 * @property list<string> $Values
 * @property string $DefaultValue
 */
class CostCategoryReference extends Shape
{
    /**
     * @param array{
     *     CostCategoryArn?: string,
     *     Name?: string,
     *     EffectiveStart?: string,
     *     EffectiveEnd?: string,
     *     NumberOfRules?: int<0, max>,
     *     ProcessingStatus?: list<CostCategoryProcessingStatus>,
     *     Values?: list<string>,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
