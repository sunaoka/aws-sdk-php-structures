<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 */
class SystemContentBlock extends Shape
{
    /**
     * @param array{text?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
