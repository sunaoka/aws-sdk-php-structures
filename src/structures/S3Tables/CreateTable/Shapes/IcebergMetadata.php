<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema $schema
 */
class IcebergMetadata extends Shape
{
    /**
     * @param array{schema: IcebergSchema} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
