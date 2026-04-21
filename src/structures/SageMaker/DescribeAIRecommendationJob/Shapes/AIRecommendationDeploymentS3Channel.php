<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ChannelName
 * @property string|null $Uri
 */
class AIRecommendationDeploymentS3Channel extends Shape
{
    /**
     * @param array{
     *     ChannelName?: string|null,
     *     Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
