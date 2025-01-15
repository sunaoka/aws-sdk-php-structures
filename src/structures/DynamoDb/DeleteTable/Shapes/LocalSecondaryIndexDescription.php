<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexName
 * @property list<KeySchemaElement>|null $KeySchema
 * @property Projection|null $Projection
 * @property int|null $IndexSizeBytes
 * @property int|null $ItemCount
 * @property string|null $IndexArn
 */
class LocalSecondaryIndexDescription extends Shape
{
    /**
     * @param array{
     *     IndexName?: string|null,
     *     KeySchema?: list<KeySchemaElement>|null,
     *     Projection?: Projection|null,
     *     IndexSizeBytes?: int|null,
     *     ItemCount?: int|null,
     *     IndexArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
