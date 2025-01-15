<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue>|null $Item
 */
class ItemResponse extends Shape
{
    /**
     * @param array{Item?: array<string, AttributeValue>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
