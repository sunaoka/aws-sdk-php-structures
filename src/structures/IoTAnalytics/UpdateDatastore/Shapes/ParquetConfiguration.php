<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaDefinition|null $schemaDefinition
 */
class ParquetConfiguration extends Shape
{
    /**
     * @param array{schemaDefinition?: SchemaDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
