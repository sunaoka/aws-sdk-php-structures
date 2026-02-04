<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JsonSchemaDefinition|null $jsonSchema
 */
class OutputFormatStructure extends Shape
{
    /**
     * @param array{jsonSchema?: JsonSchemaDefinition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
