<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceConfiguration|null $SourceConfiguration
 * @property array<string, FieldDefinition>|null $Schema
 */
class EntityConfiguration extends Shape
{
    /**
     * @param array{
     *     SourceConfiguration?: SourceConfiguration|null,
     *     Schema?: array<string, FieldDefinition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
