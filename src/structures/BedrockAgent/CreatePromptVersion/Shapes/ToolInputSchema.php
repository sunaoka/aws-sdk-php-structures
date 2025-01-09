<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreatePromptVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $json
 */
class ToolInputSchema extends Shape
{
    /**
     * @param array{json?: Document} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
