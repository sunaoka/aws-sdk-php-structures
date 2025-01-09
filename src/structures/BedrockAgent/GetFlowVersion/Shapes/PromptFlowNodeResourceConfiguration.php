<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $promptArn
 */
class PromptFlowNodeResourceConfiguration extends Shape
{
    /**
     * @param array{promptArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
