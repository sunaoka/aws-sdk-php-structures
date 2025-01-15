<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InferenceSpecificationName
 * @property list<EnvironmentParameter>|null $EnvironmentParameters
 * @property string|null $CompilationJobName
 */
class ModelConfiguration extends Shape
{
    /**
     * @param array{
     *     InferenceSpecificationName?: string|null,
     *     EnvironmentParameters?: list<EnvironmentParameter>|null,
     *     CompilationJobName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
