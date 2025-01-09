<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShadowModelVariantName
 * @property int<min, 100> $SamplingPercentage
 */
class ShadowModelVariantConfig extends Shape
{
    /**
     * @param array{
     *     ShadowModelVariantName: string,
     *     SamplingPercentage: int<min, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
