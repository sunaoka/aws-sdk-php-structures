<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $ValueType
 * @property string $Value
 */
class EnvironmentParameter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     ValueType: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
