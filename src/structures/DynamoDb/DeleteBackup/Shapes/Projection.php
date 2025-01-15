<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'KEYS_ONLY'|'INCLUDE'|null $ProjectionType
 * @property list<string>|null $NonKeyAttributes
 */
class Projection extends Shape
{
    /**
     * @param array{
     *     ProjectionType?: 'ALL'|'KEYS_ONLY'|'INCLUDE'|null,
     *     NonKeyAttributes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
