<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invokedModelId
 */
class PromptRouterTrace extends Shape
{
    /**
     * @param array{invokedModelId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
