<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableSchemaEvolution
 */
class SchemaEvolution extends Shape
{
    /**
     * @param array{EnableSchemaEvolution?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
