<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageComparisons\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression>|null $Or
 * @property list<Expression>|null $And
 * @property Expression|null $Not
 * @property DimensionValues|null $Dimensions
 * @property TagValues|null $Tags
 * @property CostCategoryValues|null $CostCategories
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     Or?: list<Expression>|null,
     *     And?: list<Expression>|null,
     *     Not?: Expression|null,
     *     Dimensions?: DimensionValues|null,
     *     Tags?: TagValues|null,
     *     CostCategories?: CostCategoryValues|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
