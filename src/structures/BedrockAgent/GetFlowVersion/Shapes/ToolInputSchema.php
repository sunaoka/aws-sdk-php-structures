<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $json
 */
class ToolInputSchema extends Shape
{
    /**
     * @param array{json?: Document|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
