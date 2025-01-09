<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InferenceSpecificationName
 * @property list<EnvironmentParameter> $EnvironmentParameters
 * @property string $CompilationJobName
 */
class ModelConfiguration extends Shape
{
    /**
     * @param array{
     *     InferenceSpecificationName?: string,
     *     EnvironmentParameters?: list<EnvironmentParameter>,
     *     CompilationJobName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
