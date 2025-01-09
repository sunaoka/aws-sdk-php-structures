<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ssmExecutionArn
 */
class AutomationExecution extends Shape
{
    /**
     * @param array{ssmExecutionArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
