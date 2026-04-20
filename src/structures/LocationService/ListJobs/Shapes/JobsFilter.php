<?php

namespace Sunaoka\Aws\Structures\LocationService\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled'|null $JobStatus
 */
class JobsFilter extends Shape
{
    /**
     * @param array{JobStatus?: 'Pending'|'Running'|'Completed'|'Failed'|'Cancelling'|'Cancelled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
