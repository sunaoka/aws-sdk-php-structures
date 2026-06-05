<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3OutputLocation
 * @property string|null $ModelPackageGroupIdentifier
 * @property AIMlflowConfig|null $MlflowConfig
 */
class AIRecommendationOutputConfig extends Shape
{
    /**
     * @param array{
     *     S3OutputLocation?: string|null,
     *     ModelPackageGroupIdentifier?: string|null,
     *     MlflowConfig?: AIMlflowConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
