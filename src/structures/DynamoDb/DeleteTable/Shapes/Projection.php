<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'KEYS_ONLY'|'INCLUDE' $ProjectionType
 * @property list<string> $NonKeyAttributes
 */
class Projection extends Shape
{
    /**
     * @param array{
     *     ProjectionType?: 'ALL'|'KEYS_ONLY'|'INCLUDE',
     *     NonKeyAttributes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
