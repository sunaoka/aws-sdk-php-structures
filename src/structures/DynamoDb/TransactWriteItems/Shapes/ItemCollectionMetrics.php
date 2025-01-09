<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue> $ItemCollectionKey
 * @property list<double> $SizeEstimateRangeGB
 */
class ItemCollectionMetrics extends Shape
{
    /**
     * @param array{
     *     ItemCollectionKey?: array<string, AttributeValue>,
     *     SizeEstimateRangeGB?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
