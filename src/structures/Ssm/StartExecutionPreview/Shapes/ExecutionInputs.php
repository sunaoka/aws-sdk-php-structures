<?php

namespace Sunaoka\Aws\Structures\Ssm\StartExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationExecutionInputs|null $Automation
 */
class ExecutionInputs extends Shape
{
    /**
     * @param array{Automation?: AutomationExecutionInputs|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
