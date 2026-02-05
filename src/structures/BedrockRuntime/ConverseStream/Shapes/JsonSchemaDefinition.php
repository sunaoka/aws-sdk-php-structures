<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $schema
 * @property string|null $name
 * @property string|null $description
 */
class JsonSchemaDefinition extends Shape
{
    /**
     * @param array{
     *     schema: string,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
