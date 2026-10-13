<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $learningRate
 * @property double|null $beta1
 * @property double|null $beta2
 * @property double|null $eps
 * @property double|null $weightDecay
 * @property double|null $gradClipNorm
 * @property double|null $loraPlusLrRatio
 */
class AdamParamsConfig extends Shape
{
    /**
     * @param array{
     *     learningRate: double,
     *     beta1?: double|null,
     *     beta2?: double|null,
     *     eps?: double|null,
     *     weightDecay?: double|null,
     *     gradClipNorm?: double|null,
     *     loraPlusLrRatio?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
