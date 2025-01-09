<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NOT_APPLICABLE' $RecommendationStatus
 * @property list<RealTimeInferenceRecommendation> $RealTimeInferenceRecommendations
 */
class DeploymentRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationStatus: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|'NOT_APPLICABLE',
     *     RealTimeInferenceRecommendations?: list<RealTimeInferenceRecommendation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
