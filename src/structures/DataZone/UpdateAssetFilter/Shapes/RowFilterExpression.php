<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EqualToExpression $equalTo
 * @property GreaterThanExpression $greaterThan
 * @property GreaterThanOrEqualToExpression $greaterThanOrEqualTo
 * @property InExpression $in
 * @property IsNotNullExpression $isNotNull
 * @property IsNullExpression $isNull
 * @property LessThanExpression $lessThan
 * @property LessThanOrEqualToExpression $lessThanOrEqualTo
 * @property LikeExpression $like
 * @property NotEqualToExpression $notEqualTo
 * @property NotInExpression $notIn
 * @property NotLikeExpression $notLike
 */
class RowFilterExpression extends Shape
{
    /**
     * @param array{
     *     equalTo?: EqualToExpression,
     *     greaterThan?: GreaterThanExpression,
     *     greaterThanOrEqualTo?: GreaterThanOrEqualToExpression,
     *     in?: InExpression,
     *     isNotNull?: IsNotNullExpression,
     *     isNull?: IsNullExpression,
     *     lessThan?: LessThanExpression,
     *     lessThanOrEqualTo?: LessThanOrEqualToExpression,
     *     like?: LikeExpression,
     *     notEqualTo?: NotEqualToExpression,
     *     notIn?: NotInExpression,
     *     notLike?: NotLikeExpression
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
