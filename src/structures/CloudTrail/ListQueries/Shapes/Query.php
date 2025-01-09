<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryId
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT' $QueryStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class Query extends Shape
{
    /**
     * @param array{
     *     QueryId?: string,
     *     QueryStatus?: 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT',
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
