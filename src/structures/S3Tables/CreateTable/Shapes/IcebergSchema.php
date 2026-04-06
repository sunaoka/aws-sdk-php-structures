<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SchemaField> $fields
 */
class IcebergSchema extends Shape
{
    /**
     * @param array{fields: list<SchemaField>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
