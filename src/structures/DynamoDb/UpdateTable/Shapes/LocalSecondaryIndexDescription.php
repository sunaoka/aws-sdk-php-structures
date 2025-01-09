<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 * @property int $IndexSizeBytes
 * @property int $ItemCount
 * @property string $IndexArn
 */
class LocalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     Projection?: Projection,
     *     IndexSizeBytes?: int,
     *     ItemCount?: int,
     *     IndexArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
