<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CandidateGenerationConfig $CandidateGenerationConfig
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 * @property string $FeatureSpecificationS3Uri
 * @property 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING' $Mode
 * @property bool $GenerateCandidateDefinitionsOnly
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 * @property string $TargetAttributeName
 * @property string $SampleWeightAttributeName
 */
class TabularJobConfig extends Shape
{
    /**
     * @param array{
     *     CandidateGenerationConfig?: CandidateGenerationConfig,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria,
     *     FeatureSpecificationS3Uri?: string,
     *     Mode?: 'AUTO'|'ENSEMBLING'|'HYPERPARAMETER_TUNING',
     *     GenerateCandidateDefinitionsOnly?: bool,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression',
     *     TargetAttributeName: string,
     *     SampleWeightAttributeName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
