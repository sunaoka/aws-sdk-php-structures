<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CandidateGenerationConfig|null $CandidateGenerationConfig
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property string|null $FeatureSpecificationS3Uri
 * @property 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING'|null $Mode
 * @property bool|null $GenerateCandidateDefinitionsOnly
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 * @property string $TargetAttributeName
 * @property string|null $SampleWeightAttributeName
 */
class TabularJobConfig extends Shape
{
    /**
     * @param array{
     *     CandidateGenerationConfig?: CandidateGenerationConfig|null,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     FeatureSpecificationS3Uri?: string|null,
     *     Mode?: 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING'|null,
     *     GenerateCandidateDefinitionsOnly?: bool|null,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'|null,
     *     TargetAttributeName: string,
     *     SampleWeightAttributeName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
