<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Immediate'|'AfterDataLoad'|null $StopJobOnFailureTiming
 */
class DQStopJobOnFailureOptions extends Shape
{
    /**
     * @param array{StopJobOnFailureTiming?: 'Immediate'|'AfterDataLoad'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
