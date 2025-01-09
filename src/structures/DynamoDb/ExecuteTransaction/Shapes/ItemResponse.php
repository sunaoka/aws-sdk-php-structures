<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteTransaction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Item
 */
class ItemResponse extends Shape
{
    /**
     * @param array{Item?: array<string, AttributeValue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
