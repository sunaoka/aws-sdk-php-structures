<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM'|null $ConfigurationType
 * @property int<1, max>|null $Parallelism
 * @property int<1, max>|null $ParallelismPerKPU
 * @property int<1, max>|null $CurrentParallelism
 * @property bool|null $AutoScalingEnabled
 */
class ParallelismConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'DEFAULT'|'CUSTOM'|null,
     *     Parallelism?: int<1, max>|null,
     *     ParallelismPerKPU?: int<1, max>|null,
     *     CurrentParallelism?: int<1, max>|null,
     *     AutoScalingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
