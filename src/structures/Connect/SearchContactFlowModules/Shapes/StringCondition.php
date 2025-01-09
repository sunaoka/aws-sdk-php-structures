<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactFlowModules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldName
 * @property string $Value
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT' $ComparisonType
 */
class StringCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string,
     *     Value?: string,
     *     ComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
