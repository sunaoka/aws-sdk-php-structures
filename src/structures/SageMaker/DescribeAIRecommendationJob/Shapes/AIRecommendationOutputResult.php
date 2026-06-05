<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3OutputLocation
 * @property string|null $ModelPackageGroupIdentifier
 * @property AIMlflowConfig|null $MlflowConfig
 */
class AIRecommendationOutputResult extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation: string,
     *     ModelPackageGroupIdentifier?: string|null,
     *     MlflowConfig?: AIMlflowConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
