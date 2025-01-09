<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression> $Or
 * @property list<Expression> $And
 * @property Expression $Not
 * @property DimensionValues $Dimensions
 * @property TagValues $Tags
 * @property CostCategoryValues $CostCategories
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     Or?: list<Expression>,
     *     And?: list<Expression>,
     *     Not?: Expression,
     *     Dimensions?: DimensionValues,
     *     Tags?: TagValues,
     *     CostCategories?: CostCategoryValues
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
