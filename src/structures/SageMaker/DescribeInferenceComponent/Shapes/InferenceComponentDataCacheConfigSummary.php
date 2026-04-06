<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableCaching
 */
class InferenceComponentDataCacheConfigSummary extends Shape
{
    /**
     * @param array{EnableCaching: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
