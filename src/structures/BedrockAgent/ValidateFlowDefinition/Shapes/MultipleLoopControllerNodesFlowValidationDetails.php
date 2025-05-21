<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ValidateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $loopNode
 */
class MultipleLoopControllerNodesFlowValidationDetails extends Shape
{
    /**
     * @param array{loopNode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
