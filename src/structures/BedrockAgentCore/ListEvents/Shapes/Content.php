<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 */
class Content extends Shape
{
    /**
     * @param array{text?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
