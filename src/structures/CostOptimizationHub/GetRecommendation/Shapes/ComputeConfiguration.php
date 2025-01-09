<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $vCpu
 * @property int $memorySizeInMB
 * @property string $architecture
 * @property string $platform
 */
class ComputeConfiguration extends Shape
{
    /**
     * @param array{
     *     vCpu?: double,
     *     memorySizeInMB?: int,
     *     architecture?: string,
     *     platform?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
