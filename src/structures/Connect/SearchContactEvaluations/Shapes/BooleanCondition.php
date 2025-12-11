<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property 'IS_TRUE'|'IS_FALSE'|null $ComparisonType
 */
class BooleanCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     ComparisonType?: 'IS_TRUE'|'IS_FALSE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
