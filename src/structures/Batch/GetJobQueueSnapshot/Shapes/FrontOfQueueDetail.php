<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FrontOfQueueJobSummary> $jobs
 * @property int $lastUpdatedAt
 */
class FrontOfQueueDetail extends Shape
{
    /**
     * @param array{
     *     jobs?: list<FrontOfQueueJobSummary>,
     *     lastUpdatedAt?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
