<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationExecutionInputs $Automation
 */
class ExecutionInputs extends Shape
{
    /**
     * @param array{Automation?: AutomationExecutionInputs} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
