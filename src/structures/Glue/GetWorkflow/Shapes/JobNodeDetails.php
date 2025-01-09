<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobRun> $JobRuns
 */
class JobNodeDetails extends Shape
{
    /**
     * @param array{JobRuns?: list<JobRun>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
