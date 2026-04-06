<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'COMPLETED'|'FAILED' $state
 */
class ExecutionStatus extends Shape
{
    /**
     * @param array{state: 'RUNNING'|'COMPLETED'|'FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
