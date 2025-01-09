<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateDataset\Shapes;

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
