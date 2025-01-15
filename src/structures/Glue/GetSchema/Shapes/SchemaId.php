<?php

namespace Sunaoka\Aws\Structures\Glue\GetSchema\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SchemaArn
 * @property string|null $SchemaName
 * @property string|null $RegistryName
 */
class SchemaId extends Shape
{
    /**
     * @param array{
     *     SchemaArn?: string|null,
     *     SchemaName?: string|null,
     *     RegistryName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
