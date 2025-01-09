<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparator
 * @property 'RESULT_TYPE' $field
 * @property string $value
 */
class QueryConditionItem extends Shape
{
    /**
     * @param array{
     *     comparator: 'EQUALS',
     *     field: 'RESULT_TYPE',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
