<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null $comparator
 * @property 'OBJECT_EXTENSION'|'OBJECT_LAST_MODIFIED_DATE'|'OBJECT_SIZE'|'OBJECT_KEY'|null $key
 * @property list<string>|null $values
 */
class SimpleScopeTerm extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH'|null,
     *     key?: 'OBJECT_EXTENSION'|'OBJECT_LAST_MODIFIED_DATE'|'OBJECT_SIZE'|'OBJECT_KEY'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
