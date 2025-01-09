<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $solutionVersionArn
 * @property string $filterArn
 * @property int $numResults
 * @property Shapes\BatchInferenceJobInput $jobInput
 * @property Shapes\BatchInferenceJobOutput $jobOutput
 * @property string $roleArn
 * @property Shapes\BatchInferenceJobConfig $batchInferenceJobConfig
 * @property list<Shapes\Tag> $tags
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION' $batchInferenceJobMode
 * @property Shapes\ThemeGenerationConfig $themeGenerationConfig
 */
class CreateBatchInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     solutionVersionArn: string,
     *     filterArn?: string,
     *     numResults?: int,
     *     jobInput: Shapes\BatchInferenceJobInput,
     *     jobOutput: Shapes\BatchInferenceJobOutput,
     *     roleArn: string,
     *     batchInferenceJobConfig?: Shapes\BatchInferenceJobConfig,
     *     tags?: list<Shapes\Tag>,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION',
     *     themeGenerationConfig?: Shapes\ThemeGenerationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
