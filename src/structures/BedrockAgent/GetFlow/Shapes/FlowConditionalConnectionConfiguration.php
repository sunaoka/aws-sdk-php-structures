<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $condition
 */
class FlowConditionalConnectionConfiguration extends Shape
{
    /**
     * @param array{condition: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
