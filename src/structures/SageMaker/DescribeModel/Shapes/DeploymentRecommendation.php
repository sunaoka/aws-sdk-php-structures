<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NOT_APPLICABLE' $RecommendationStatus
 * @property list<RealTimeInferenceRecommendation>|null $RealTimeInferenceRecommendations
 */
class DeploymentRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationStatus: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NOT_APPLICABLE',
     *     RealTimeInferenceRecommendations?: list<RealTimeInferenceRecommendation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
