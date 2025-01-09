<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShadowModelVariantName
 * @property int $SamplingPercentage
 */
class ShadowModelVariantConfig extends Shape
{
    /**
     * @param array{
     *     ShadowModelVariantName: string,
     *     SamplingPercentage: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
