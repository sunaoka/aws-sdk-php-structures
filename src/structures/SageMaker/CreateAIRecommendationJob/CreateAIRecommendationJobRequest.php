<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AIRecommendationJobName
 * @property Shapes\AIModelSource $ModelSource
 * @property Shapes\AIRecommendationOutputConfig $OutputConfig
 * @property string $AIWorkloadConfigIdentifier
 * @property Shapes\AIRecommendationPerformanceTarget $PerformanceTarget
 * @property string $RoleArn
 * @property Shapes\AIRecommendationInferenceSpecification|null $InferenceSpecification
 * @property bool|null $OptimizeModel
 * @property Shapes\AIRecommendationComputeSpec|null $ComputeSpec
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAIRecommendationJobRequest extends Request
{
    /**
     * @param array{
     *     AIRecommendationJobName: string,
     *     ModelSource: Shapes\AIModelSource,
     *     OutputConfig: Shapes\AIRecommendationOutputConfig,
     *     AIWorkloadConfigIdentifier: string,
     *     PerformanceTarget: Shapes\AIRecommendationPerformanceTarget,
     *     RoleArn: string,
     *     InferenceSpecification?: Shapes\AIRecommendationInferenceSpecification|null,
     *     OptimizeModel?: bool|null,
     *     ComputeSpec?: Shapes\AIRecommendationComputeSpec|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
