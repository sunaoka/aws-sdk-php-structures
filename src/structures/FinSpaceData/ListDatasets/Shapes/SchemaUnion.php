<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaDefinition $tabularSchemaConfig
 */
class SchemaUnion extends Shape
{
    /**
     * @param array{tabularSchemaConfig?: SchemaDefinition} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
