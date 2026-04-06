<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergMetadata|null $iceberg
 */
class TableMetadata extends Shape
{
    /**
     * @param array{iceberg?: IcebergMetadata|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
