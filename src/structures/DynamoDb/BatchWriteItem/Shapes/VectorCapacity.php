<?php

namespace Sunaoka\Aws\Structures\DynamoDb\BatchWriteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $VectorSearchRequestBytes
 * @property double|null $VectorWriteRequestBytes
 */
class VectorCapacity extends Shape
{
    /**
     * @param array{
     *     VectorSearchRequestBytes?: double|null,
     *     VectorWriteRequestBytes?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
