<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateClassificationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH' $comparator
 * @property 'OBJECT_EXTENSION'|'OBJECT_LAST_MODIFIED_DATE'|'OBJECT_SIZE'|'OBJECT_KEY' $key
 * @property list<string> $values
 */
class SimpleScopeTerm extends Shape
{
    /**
     * @param array{
     *     comparator?: 'EQ'|'GT'|'GTE'|'LT'|'LTE'|'NE'|'CONTAINS'|'STARTS_WITH',
     *     key?: 'OBJECT_EXTENSION'|'OBJECT_LAST_MODIFIED_DATE'|'OBJECT_SIZE'|'OBJECT_KEY',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
