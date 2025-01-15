<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FrontOfQueueJobSummary>|null $jobs
 * @property int|null $lastUpdatedAt
 */
class FrontOfQueueDetail extends Shape
{
    /**
     * @param array{
     *     jobs?: list<FrontOfQueueJobSummary>|null,
     *     lastUpdatedAt?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
