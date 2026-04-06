<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetPromptRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelArn
 */
class PromptRouterTargetModel extends Shape
{
    /**
     * @param array{modelArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
