<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Percentile
 * @property int $ValueInMilliseconds
 */
class ModelLatencyThreshold extends Shape
{
    /**
     * @param array{
     *     Percentile?: string,
     *     ValueInMilliseconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
