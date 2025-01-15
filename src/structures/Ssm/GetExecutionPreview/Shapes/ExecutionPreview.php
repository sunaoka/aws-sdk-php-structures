<?php

namespace Sunaoka\Aws\Structures\Ssm\GetExecutionPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomationExecutionPreview|null $Automation
 */
class ExecutionPreview extends Shape
{
    /**
     * @param array{Automation?: AutomationExecutionPreview|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
