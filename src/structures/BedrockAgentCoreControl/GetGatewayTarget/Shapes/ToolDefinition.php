<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property SchemaDefinition $inputSchema
 * @property SchemaDefinition|null $outputSchema
 */
class ToolDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description: string,
     *     inputSchema: SchemaDefinition,
     *     outputSchema?: SchemaDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
