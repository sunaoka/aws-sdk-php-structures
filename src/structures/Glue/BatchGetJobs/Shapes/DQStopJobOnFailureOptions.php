<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Immediate'|'AfterDataLoad' $StopJobOnFailureTiming
 */
class DQStopJobOnFailureOptions extends Shape
{
    /**
     * @param array{StopJobOnFailureTiming?: 'Immediate'|'AfterDataLoad'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
