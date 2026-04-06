<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|'EXISTS'|'NOT_EXISTS'|'BEGINS_WITH' $operator
 * @property DocumentAttributeValue|null $value
 */
class DocumentAttributeCondition extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     operator: 'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|'EXISTS'|'NOT_EXISTS'|'BEGINS_WITH',
     *     value?: DocumentAttributeValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
