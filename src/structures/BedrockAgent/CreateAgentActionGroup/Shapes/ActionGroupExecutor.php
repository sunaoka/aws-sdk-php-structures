<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RETURN_CONTROL'|null $customControl
 * @property string|null $lambda
 */
class ActionGroupExecutor extends Shape
{
    /**
     * @param array{
     *     customControl?: 'RETURN_CONTROL'|null,
     *     lambda?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
