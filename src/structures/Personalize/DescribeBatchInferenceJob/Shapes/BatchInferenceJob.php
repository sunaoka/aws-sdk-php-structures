<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobName
 * @property string|null $batchInferenceJobArn
 * @property string|null $filterArn
 * @property string|null $failureReason
 * @property string|null $solutionVersionArn
 * @property int|null $numResults
 * @property BatchInferenceJobInput|null $jobInput
 * @property BatchInferenceJobOutput|null $jobOutput
 * @property BatchInferenceJobConfig|null $batchInferenceJobConfig
 * @property string|null $roleArn
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION'|null $batchInferenceJobMode
 * @property ThemeGenerationConfig|null $themeGenerationConfig
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class BatchInferenceJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     batchInferenceJobArn?: string|null,
     *     filterArn?: string|null,
     *     failureReason?: string|null,
     *     solutionVersionArn?: string|null,
     *     numResults?: int|null,
     *     jobInput?: BatchInferenceJobInput|null,
     *     jobOutput?: BatchInferenceJobOutput|null,
     *     batchInferenceJobConfig?: BatchInferenceJobConfig|null,
     *     roleArn?: string|null,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION'|null,
     *     themeGenerationConfig?: ThemeGenerationConfig|null,
     *     status?: string|null,
     *     creationDateTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
