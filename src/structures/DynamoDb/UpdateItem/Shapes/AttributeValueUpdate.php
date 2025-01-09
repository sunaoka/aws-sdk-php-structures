<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue $Value
 * @property 'ADD'|'PUT'|'DELETE' $Action
 */
class AttributeValueUpdate extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue,
     *     Action?: 'ADD'|'PUT'|'DELETE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
