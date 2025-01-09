<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'HASH'|'RANGE' $KeyType
 */
class KeySchemaElement extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     KeyType: 'HASH'|'RANGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
