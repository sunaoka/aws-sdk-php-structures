<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointName
 */
class EndpointInfo extends Shape
{
    /**
     * @param array{EndpointName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
