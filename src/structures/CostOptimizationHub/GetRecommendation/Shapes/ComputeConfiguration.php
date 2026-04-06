<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $vCpu
 * @property int|null $memorySizeInMB
 * @property string|null $architecture
 * @property string|null $platform
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     vCpu?: double|null,
     *     memorySizeInMB?: int|null,
     *     architecture?: string|null,
     *     platform?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
