<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property int<1, max> $Parallelism
 * @property int<1, max> $ParallelismPerKPU
 * @property int<1, max> $CurrentParallelism
 * @property bool $AutoScalingEnabled
 */
class ParallelismConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'DEFAULT'|'CUSTOM',
     *     Parallelism?: int<1, max>,
     *     ParallelismPerKPU?: int<1, max>,
     *     CurrentParallelism?: int<1, max>,
     *     AutoScalingEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
