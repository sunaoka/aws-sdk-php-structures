<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RETURN_CONTROL' $customControl
 * @property string $lambda
 */
class ActionGroupExecutor extends Shape
{
    /**
     * @param array{
     *     customControl?: 'RETURN_CONTROL',
     *     lambda?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
