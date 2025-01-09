<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression> $and
 * @property list<Expression> $or
 * @property Expression $not
 * @property ExpressionFilter $costCategories
 * @property ExpressionFilter $dimensions
 * @property ExpressionFilter $tags
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     and?: list<Expression>,
     *     or?: list<Expression>,
     *     not?: Expression,
     *     costCategories?: ExpressionFilter,
     *     dimensions?: ExpressionFilter,
     *     tags?: ExpressionFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
