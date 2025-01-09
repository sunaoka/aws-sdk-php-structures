<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationExecutionPreview $Automation
 */
class ExecutionPreview extends Shape
{
    /**
     * @param array{Automation?: AutomationExecutionPreview} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
