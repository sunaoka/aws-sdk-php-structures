<?php

namespace Sunaoka\Aws\Structures\Personalize\ListBatchInferenceJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchInferenceJobArn
 * @property string $jobName
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 * @property string $failureReason
 * @property string $solutionVersionArn
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION' $batchInferenceJobMode
 */
class BatchInferenceJobSummary extends Shape
{
    /**
     * @param array{
     *     batchInferenceJobArn?: string,
     *     jobName?: string,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     failureReason?: string,
     *     solutionVersionArn?: string,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
