<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property ToolInputSchema $inputSchema
 */
class ToolSpecification extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     inputSchema: ToolInputSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
