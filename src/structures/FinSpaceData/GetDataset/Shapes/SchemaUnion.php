<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SchemaDefinition|null $tabularSchemaConfig
 */
class SchemaUnion extends Shape
{
    /**
     * @param array{tabularSchemaConfig?: SchemaDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
