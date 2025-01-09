<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 * @property AutoMLSecurityConfig $SecurityConfig
 * @property AutoMLCandidateGenerationConfig $CandidateGenerationConfig
 * @property AutoMLDataSplitConfig $DataSplitConfig
 * @property 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING' $Mode
 */
class AutoMLJobConfig extends Shape
{
    /**
     * @param array{
     *     CompletionCriteria?: AutoMLJobCompletionCriteria,
     *     SecurityConfig?: AutoMLSecurityConfig,
     *     CandidateGenerationConfig?: AutoMLCandidateGenerationConfig,
     *     DataSplitConfig?: AutoMLDataSplitConfig,
     *     Mode?: 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
