<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $batchInferenceJobArn
 * @property string|null $jobName
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 * @property string|null $failureReason
 * @property string|null $solutionVersionArn
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION'|null $batchInferenceJobMode
 */
class BatchInferenceJobSummary extends Shape
{
    /**
     * @param array{
     *     batchInferenceJobArn?: string|null,
     *     jobName?: string|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     failureReason?: string|null,
     *     solutionVersionArn?: string|null,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
