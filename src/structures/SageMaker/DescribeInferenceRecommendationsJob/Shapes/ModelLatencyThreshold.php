<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Percentile
 * @property int|null $ValueInMilliseconds
 */
class ModelLatencyThreshold extends Shape
{
    /**
     * @param array{
     *     Percentile?: string|null,
     *     ValueInMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
