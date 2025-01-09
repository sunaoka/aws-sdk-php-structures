<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $KeySchema
 * @property Projection $Projection
 */
class LocalSecondaryIndexInfo extends Shape
{
    /**
     * @param array{
     *     IndexName?: string,
     *     KeySchema?: list<KeySchemaElement>,
     *     Projection?: Projection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
