<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetPolicyPreviewJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED' $jobStatus
 * @property \Aws\Api\DateTimeResult $submittedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property JobError|null $jobError
 */
class PolicyPreviewJobDetails extends Shape
{
    /**
     * @param array{
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELED',
     *     submittedAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     jobError?: JobError|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
