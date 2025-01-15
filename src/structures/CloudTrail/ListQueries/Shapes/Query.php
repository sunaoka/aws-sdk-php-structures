<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryId
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null $QueryStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class Query extends Shape
{
    /**
     * @param array{
     *     QueryId?: string|null,
     *     QueryStatus?: 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
