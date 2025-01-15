<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PutRequest|null $PutRequest
 * @property DeleteRequest|null $DeleteRequest
 */
class WriteRequest extends Shape
{
    /**
     * @param array{
     *     PutRequest?: PutRequest|null,
     *     DeleteRequest?: DeleteRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
