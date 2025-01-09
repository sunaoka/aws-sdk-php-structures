<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaId $SchemaId
 * @property string $SchemaVersionId
 * @property int $SchemaVersionNumber
 */
class SchemaReference extends Shape
{
    /**
     * @param array{
     *     SchemaId?: SchemaId,
     *     SchemaVersionId?: string,
     *     SchemaVersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
