<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property AutoMLSecurityConfig|null $SecurityConfig
 * @property AutoMLCandidateGenerationConfig|null $CandidateGenerationConfig
 * @property AutoMLDataSplitConfig|null $DataSplitConfig
 * @property 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING'|null $Mode
 */
class AutoMLJobConfig extends Shape
{
    /**
     * @param array{
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     SecurityConfig?: AutoMLSecurityConfig|null,
     *     CandidateGenerationConfig?: AutoMLCandidateGenerationConfig|null,
     *     DataSplitConfig?: AutoMLDataSplitConfig|null,
     *     Mode?: 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
