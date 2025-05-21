<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Value
 * @property 'EqualTo'|'GreaterThanOrEqualTo'|null $Relation
 */
class TotalHits extends Shape
{
    /**
     * @param array{
     *     Value?: int|null,
     *     Relation?: 'EqualTo'|'GreaterThanOrEqualTo'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
