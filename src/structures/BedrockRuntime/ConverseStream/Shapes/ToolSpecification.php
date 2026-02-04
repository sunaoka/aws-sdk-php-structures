<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property ToolInputSchema $inputSchema
 * @property bool|null $strict
 */
class ToolSpecification extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     inputSchema: ToolInputSchema,
     *     strict?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
