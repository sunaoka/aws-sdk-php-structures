<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $Key
 */
class DeleteRequest extends Shape
{
    /**
     * @param array{Key: array<string, AttributeValue>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
