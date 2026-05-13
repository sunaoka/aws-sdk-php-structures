<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetCodeReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $codeReviewId
 * @property string $agentSpaceId
 * @property string $title
 * @property Assets $assets
 * @property string|null $serviceRole
 * @property CloudWatchLog|null $logConfig
 * @property 'AUTOMATIC'|'DISABLED'|null $codeRemediationStrategy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CodeReview extends Shape
{
    /**
     * @param array{
     *     codeReviewId: string,
     *     agentSpaceId: string,
     *     title: string,
     *     assets: Assets,
     *     serviceRole?: string|null,
     *     logConfig?: CloudWatchLog|null,
     *     codeRemediationStrategy?: 'AUTOMATIC'|'DISABLED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
