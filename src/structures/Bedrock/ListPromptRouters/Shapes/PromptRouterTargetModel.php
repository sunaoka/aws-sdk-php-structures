<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListPromptRouters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 */
class PromptRouterTargetModel extends Shape
{
    /**
     * @param array{modelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
