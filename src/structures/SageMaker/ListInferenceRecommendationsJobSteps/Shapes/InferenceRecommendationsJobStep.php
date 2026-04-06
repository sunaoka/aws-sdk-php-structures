<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BENCHMARK' $StepType
 * @property string $JobName
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $Status
 * @property RecommendationJobInferenceBenchmark|null $InferenceBenchmark
 */
class InferenceRecommendationsJobStep extends Shape
{
    /**
     * @param array{
     *     StepType: 'BENCHMARK',
     *     JobName: string,
     *     Status: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED',
     *     InferenceBenchmark?: RecommendationJobInferenceBenchmark|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
