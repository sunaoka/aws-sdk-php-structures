<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviewJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREFLIGHT'|'STATIC_ANALYSIS'|'PENTEST'|'FINALIZING'|null $name
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Step extends Shape
{
    /**
     * @param array{
     *     name?: 'PREFLIGHT'|'STATIC_ANALYSIS'|'PENTEST'|'FINALIZING'|null,
     *     status?: 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
