<?php

namespace Sunaoka\Aws\Structures\DynamoDb\SearchVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeValue>|null $Item
 * @property double|null $Score
 */
class SearchResultItem extends Shape
{
    /**
     * @param array{
     *     Item?: array<string, AttributeValue>|null,
     *     Score?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
