<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeValue|null $Value
 * @property 'ADD'|'PUT'|'DELETE'|null $Action
 */
class AttributeValueUpdate extends Shape
{
    /**
     * @param array{
     *     Value?: AttributeValue|null,
     *     Action?: 'ADD'|'PUT'|'DELETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
