<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaDefinition $schemaDefinition
 */
class ParquetConfiguration extends Shape
{
    /**
     * @param array{schemaDefinition?: SchemaDefinition} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
