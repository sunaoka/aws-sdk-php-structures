<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property ToolInputSchema $inputSchema
 * @property string $name
 */
class ToolSpecification extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     inputSchema: ToolInputSchema,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
