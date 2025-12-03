<?php

namespace Sunaoka\Aws\Structures\S3Tables\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema $schema
 * @property array<string, string>|null $properties
 */
class IcebergMetadata extends Shape
{
    /**
     * @param array{
     *     schema: IcebergSchema,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
