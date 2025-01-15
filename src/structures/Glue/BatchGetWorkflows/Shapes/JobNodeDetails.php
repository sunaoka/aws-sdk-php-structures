<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JobRun>|null $JobRuns
 */
class JobNodeDetails extends Shape
{
    /**
     * @param array{JobRuns?: list<JobRun>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
