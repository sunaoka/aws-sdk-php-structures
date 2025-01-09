<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetPrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property ToolInputSchema $inputSchema
 * @property string $name
 */
class ToolSpecification extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     inputSchema: ToolInputSchema,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
