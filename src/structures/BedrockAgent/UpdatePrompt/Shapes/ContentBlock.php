<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdatePrompt\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class ContentBlock extends Shape
{
    /**
     * @param array{text?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
