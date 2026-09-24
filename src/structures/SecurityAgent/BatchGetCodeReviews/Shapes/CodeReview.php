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
 * @property 'DISABLED'|'SIMULATED'|null $validationMode
 * @property double|null $maxTaskHours
 * @property ReportDestination|null $reportDestination
 * @property ReportFilters|null $reportFilters
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
     *     validationMode?: 'DISABLED'|'SIMULATED'|null,
     *     maxTaskHours?: double|null,
     *     reportDestination?: ReportDestination|null,
     *     reportFilters?: ReportFilters|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
