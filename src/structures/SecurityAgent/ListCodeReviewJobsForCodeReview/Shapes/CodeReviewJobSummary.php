<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviewJobsForCodeReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeReviewJobId
 * @property string $codeReviewId
 * @property string|null $title
 * @property 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CodeReviewJobSummary extends Shape
{
    /**
     * @param array{
     *     codeReviewJobId: string,
     *     codeReviewId: string,
     *     title?: string|null,
     *     status?: 'IN_PROGRESS'|'STOPPING'|'STOPPED'|'FAILED'|'COMPLETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
