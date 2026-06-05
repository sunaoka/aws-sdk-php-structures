<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MlflowResourceArn
 * @property string|null $MlflowExperimentName
 * @property string|null $MlflowRunName
 */
class AIMlflowConfig extends Shape
{
    /**
     * @param array{
     *     MlflowResourceArn: string,
     *     MlflowExperimentName?: string|null,
     *     MlflowRunName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
