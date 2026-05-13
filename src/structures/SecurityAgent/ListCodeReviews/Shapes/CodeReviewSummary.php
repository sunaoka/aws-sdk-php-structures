<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeReviewId
 * @property string $agentSpaceId
 * @property string $title
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CodeReviewSummary extends Shape
{
    /**
     * @param array{
     *     codeReviewId: string,
     *     agentSpaceId: string,
     *     title: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
