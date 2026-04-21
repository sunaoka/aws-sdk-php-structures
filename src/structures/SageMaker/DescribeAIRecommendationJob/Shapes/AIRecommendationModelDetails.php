<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ModelPackageArn
 * @property string|null $InferenceSpecificationName
 * @property list<AIRecommendationInstanceDetail>|null $InstanceDetails
 */
class AIRecommendationModelDetails extends Shape
{
    /**
     * @param array{
     *     ModelPackageArn?: string|null,
     *     InferenceSpecificationName?: string|null,
     *     InstanceDetails?: list<AIRecommendationInstanceDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
