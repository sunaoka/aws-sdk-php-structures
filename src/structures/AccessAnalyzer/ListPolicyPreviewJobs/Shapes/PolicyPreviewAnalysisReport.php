<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyPreviewJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string $outputS3Uri
 */
class PolicyPreviewAnalysisReport extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED',
     *     submittedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     outputS3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
