<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeBatchInferenceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobName
 * @property string $batchInferenceJobArn
 * @property string $filterArn
 * @property string $failureReason
 * @property string $solutionVersionArn
 * @property int $numResults
 * @property BatchInferenceJobInput $jobInput
 * @property BatchInferenceJobOutput $jobOutput
 * @property BatchInferenceJobConfig $batchInferenceJobConfig
 * @property string $roleArn
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION' $batchInferenceJobMode
 * @property ThemeGenerationConfig $themeGenerationConfig
 * @property string $status
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class BatchInferenceJob extends Shape
{
    /**
     * @param array{
     *     jobName?: string,
     *     batchInferenceJobArn?: string,
     *     filterArn?: string,
     *     failureReason?: string,
     *     solutionVersionArn?: string,
     *     numResults?: int,
     *     jobInput?: BatchInferenceJobInput,
     *     jobOutput?: BatchInferenceJobOutput,
     *     batchInferenceJobConfig?: BatchInferenceJobConfig,
     *     roleArn?: string,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION',
     *     themeGenerationConfig?: ThemeGenerationConfig,
     *     status?: string,
     *     creationDateTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
