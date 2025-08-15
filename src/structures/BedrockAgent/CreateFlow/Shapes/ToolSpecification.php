<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property ToolInputSchema $inputSchema
 */
class ToolSpecification extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     inputSchema: ToolInputSchema
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
