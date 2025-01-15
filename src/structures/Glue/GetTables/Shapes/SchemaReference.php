<?php

namespace Sunaoka\Aws\Structures\Glue\GetTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaId|null $SchemaId
 * @property string|null $SchemaVersionId
 * @property int<1, 100000>|null $SchemaVersionNumber
 */
class SchemaReference extends Shape
{
    /**
     * @param array{
     *     SchemaId?: SchemaId|null,
     *     SchemaVersionId?: string|null,
     *     SchemaVersionNumber?: int<1, 100000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
