<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ssmExecutionArn
 */
class AutomationExecution extends Shape
{
    /**
     * @param array{ssmExecutionArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
