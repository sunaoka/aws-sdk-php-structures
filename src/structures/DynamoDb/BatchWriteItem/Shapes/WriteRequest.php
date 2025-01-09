<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PutRequest $PutRequest
 * @property DeleteRequest $DeleteRequest
 */
class WriteRequest extends Shape
{
    /**
     * @param array{
     *     PutRequest?: PutRequest,
     *     DeleteRequest?: DeleteRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
