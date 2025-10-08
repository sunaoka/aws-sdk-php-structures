<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Expression>|null $or
 * @property list<Expression>|null $and
 * @property Expression|null $not
 * @property DimensionValues|null $dimensions
 * @property TagValues|null $tags
 * @property CostCategoryValues|null $costCategories
 */
class Expression extends Shape
{
    /**
     * @param array{
     *     or?: list<Expression>|null,
     *     and?: list<Expression>|null,
     *     not?: Expression|null,
     *     dimensions?: DimensionValues|null,
     *     tags?: TagValues|null,
     *     costCategories?: CostCategoryValues|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
