<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $BaseRatePerMinute
 * @property double|null $IncrementFactor
 * @property RolloutRateIncreaseCriteria|null $RateIncreaseCriteria
 */
class ExponentialRolloutRate extends Shape
{
    /**
     * @param array{
     *     BaseRatePerMinute?: int<1, 100>|null,
     *     IncrementFactor?: double|null,
     *     RateIncreaseCriteria?: RolloutRateIncreaseCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
