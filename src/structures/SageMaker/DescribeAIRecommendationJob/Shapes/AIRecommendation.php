<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RecommendationDescription
 * @property list<AIRecommendationOptimizationDetail>|null $OptimizationDetails
 * @property AIRecommendationModelDetails|null $ModelDetails
 * @property AIRecommendationDeploymentConfiguration|null $DeploymentConfiguration
 * @property string|null $AIBenchmarkJobArn
 * @property list<AIRecommendationPerformanceMetric>|null $ExpectedPerformance
 */
class AIRecommendation extends Shape
{
    /**
     * @param array{
     *     RecommendationDescription?: string|null,
     *     OptimizationDetails?: list<AIRecommendationOptimizationDetail>|null,
     *     ModelDetails?: AIRecommendationModelDetails|null,
     *     DeploymentConfiguration?: AIRecommendationDeploymentConfiguration|null,
     *     AIBenchmarkJobArn?: string|null,
     *     ExpectedPerformance?: list<AIRecommendationPerformanceMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
