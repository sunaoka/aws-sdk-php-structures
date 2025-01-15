<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue>|null $ItemCollectionKey
 * @property list<double>|null $SizeEstimateRangeGB
 */
class ItemCollectionMetrics extends Shape
{
    /**
     * @param array{
     *     ItemCollectionKey?: array<string, AttributeValue>|null,
     *     SizeEstimateRangeGB?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
