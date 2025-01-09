<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property int $Parallelism
 * @property int $ParallelismPerKPU
 * @property int $CurrentParallelism
 * @property bool $AutoScalingEnabled
 */
class ParallelismConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'DEFAULT'|'CUSTOM',
     *     Parallelism?: int,
     *     ParallelismPerKPU?: int,
     *     CurrentParallelism?: int,
     *     AutoScalingEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
