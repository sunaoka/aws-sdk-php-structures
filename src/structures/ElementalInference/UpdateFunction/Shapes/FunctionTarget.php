<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BedrockFunctionTarget|null $bedrock
 * @property PassthroughFunctionTarget|null $passthrough
 */
class FunctionTarget extends Shape
{
    /**
     * @param array{
     *     bedrock?: BedrockFunctionTarget|null,
     *     passthrough?: PassthroughFunctionTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
