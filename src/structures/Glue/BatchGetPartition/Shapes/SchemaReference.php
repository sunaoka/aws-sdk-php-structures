<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetPartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaId $SchemaId
 * @property string $SchemaVersionId
 * @property int<1, 100000> $SchemaVersionNumber
 */
class SchemaReference extends Shape
{
    /**
     * @param array{
     *     SchemaId?: SchemaId,
     *     SchemaVersionId?: string,
     *     SchemaVersionNumber?: int<1, 100000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
