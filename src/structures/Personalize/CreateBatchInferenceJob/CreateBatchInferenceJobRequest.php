<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $solutionVersionArn
 * @property string|null $filterArn
 * @property int|null $numResults
 * @property Shapes\BatchInferenceJobInput $jobInput
 * @property Shapes\BatchInferenceJobOutput $jobOutput
 * @property string $roleArn
 * @property Shapes\BatchInferenceJobConfig|null $batchInferenceJobConfig
 * @property list<Shapes\Tag>|null $tags
 * @property 'BATCH_INFERENCE'|'THEME_GENERATION'|null $batchInferenceJobMode
 * @property Shapes\ThemeGenerationConfig|null $themeGenerationConfig
 */
class CreateBatchInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     solutionVersionArn: string,
     *     filterArn?: string|null,
     *     numResults?: int|null,
     *     jobInput: Shapes\BatchInferenceJobInput,
     *     jobOutput: Shapes\BatchInferenceJobOutput,
     *     roleArn: string,
     *     batchInferenceJobConfig?: Shapes\BatchInferenceJobConfig|null,
     *     tags?: list<Shapes\Tag>|null,
     *     batchInferenceJobMode?: 'BATCH_INFERENCE'|'THEME_GENERATION'|null,
     *     themeGenerationConfig?: Shapes\ThemeGenerationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
