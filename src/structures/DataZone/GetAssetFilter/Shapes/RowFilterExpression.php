<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EqualToExpression|null $equalTo
 * @property NotEqualToExpression|null $notEqualTo
 * @property GreaterThanExpression|null $greaterThan
 * @property LessThanExpression|null $lessThan
 * @property GreaterThanOrEqualToExpression|null $greaterThanOrEqualTo
 * @property LessThanOrEqualToExpression|null $lessThanOrEqualTo
 * @property IsNullExpression|null $isNull
 * @property IsNotNullExpression|null $isNotNull
 * @property InExpression|null $in
 * @property NotInExpression|null $notIn
 * @property LikeExpression|null $like
 * @property NotLikeExpression|null $notLike
 */
class RowFilterExpression extends Shape
{
    /**
     * @param array{
     *     equalTo?: EqualToExpression|null,
     *     notEqualTo?: NotEqualToExpression|null,
     *     greaterThan?: GreaterThanExpression|null,
     *     lessThan?: LessThanExpression|null,
     *     greaterThanOrEqualTo?: GreaterThanOrEqualToExpression|null,
     *     lessThanOrEqualTo?: LessThanOrEqualToExpression|null,
     *     isNull?: IsNullExpression|null,
     *     isNotNull?: IsNotNullExpression|null,
     *     in?: InExpression|null,
     *     notIn?: NotInExpression|null,
     *     like?: LikeExpression|null,
     *     notLike?: NotLikeExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
