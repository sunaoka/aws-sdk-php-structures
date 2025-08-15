<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lambda
 * @property 'RETURN_CONTROL'|null $customControl
 */
class ActionGroupExecutor extends Shape
{
    /**
     * @param array{
     *     lambda?: string|null,
     *     customControl?: 'RETURN_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
