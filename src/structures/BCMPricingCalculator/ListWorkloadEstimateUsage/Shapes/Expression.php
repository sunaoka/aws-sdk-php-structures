<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression>|null $and
 * @property list<Expression>|null $or
 * @property Expression|null $not
 * @property ExpressionFilter|null $costCategories
 * @property ExpressionFilter|null $dimensions
 * @property ExpressionFilter|null $tags
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     and?: list<Expression>|null,
     *     or?: list<Expression>|null,
     *     not?: Expression|null,
     *     costCategories?: ExpressionFilter|null,
     *     dimensions?: ExpressionFilter|null,
     *     tags?: ExpressionFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
