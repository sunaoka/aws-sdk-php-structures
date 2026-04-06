<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CostCategoryArn
 * @property string|null $Name
 * @property string|null $EffectiveStart
 * @property string|null $EffectiveEnd
 * @property int<0, max>|null $NumberOfRules
 * @property list<CostCategoryProcessingStatus>|null $ProcessingStatus
 * @property list<string>|null $Values
 * @property string|null $DefaultValue
 * @property list<string>|null $SupportedResourceTypes
 */
class CostCategoryReference extends Shape
{
    /**
     * @param array{
     *     CostCategoryArn?: string|null,
     *     Name?: string|null,
     *     EffectiveStart?: string|null,
     *     EffectiveEnd?: string|null,
     *     NumberOfRules?: int<0, max>|null,
     *     ProcessingStatus?: list<CostCategoryProcessingStatus>|null,
     *     Values?: list<string>|null,
     *     DefaultValue?: string|null,
     *     SupportedResourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
