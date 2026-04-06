<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property string|null $Value
 * @property 'STARTS_WITH'|'CONTAINS'|'EXACT'|null $ComparisonType
 */
class StringCondition extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     Value?: string|null,
     *     ComparisonType?: 'STARTS_WITH'|'CONTAINS'|'EXACT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
