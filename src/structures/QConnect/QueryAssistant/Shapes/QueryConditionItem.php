<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESULT_TYPE' $field
 * @property 'EQUALS' $comparator
 * @property string $value
 */
class QueryConditionItem extends Shape
{
    /**
     * @param array{
     *     field: 'RESULT_TYPE',
     *     comparator: 'EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
