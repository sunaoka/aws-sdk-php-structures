<?php

namespace Sunaoka\Aws\Structures\Glue\BatchCreatePartition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SchemaArn
 * @property string $SchemaName
 * @property string $RegistryName
 */
class SchemaId extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string,
     *     SchemaName?: string,
     *     RegistryName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
