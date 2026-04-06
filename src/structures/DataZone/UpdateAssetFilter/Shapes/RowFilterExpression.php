<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateAssetFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EqualToExpression|null $equalTo
 * @property GreaterThanExpression|null $greaterThan
 * @property GreaterThanOrEqualToExpression|null $greaterThanOrEqualTo
 * @property InExpression|null $in
 * @property IsNotNullExpression|null $isNotNull
 * @property IsNullExpression|null $isNull
 * @property LessThanExpression|null $lessThan
 * @property LessThanOrEqualToExpression|null $lessThanOrEqualTo
 * @property LikeExpression|null $like
 * @property NotEqualToExpression|null $notEqualTo
 * @property NotInExpression|null $notIn
 * @property NotLikeExpression|null $notLike
 */
class RowFilterExpression extends Shape
{
    /**
     * @param array{
     *     equalTo?: EqualToExpression|null,
     *     greaterThan?: GreaterThanExpression|null,
     *     greaterThanOrEqualTo?: GreaterThanOrEqualToExpression|null,
     *     in?: InExpression|null,
     *     isNotNull?: IsNotNullExpression|null,
     *     isNull?: IsNullExpression|null,
     *     lessThan?: LessThanExpression|null,
     *     lessThanOrEqualTo?: LessThanOrEqualToExpression|null,
     *     like?: LikeExpression|null,
     *     notEqualTo?: NotEqualToExpression|null,
     *     notIn?: NotInExpression|null,
     *     notLike?: NotLikeExpression|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
