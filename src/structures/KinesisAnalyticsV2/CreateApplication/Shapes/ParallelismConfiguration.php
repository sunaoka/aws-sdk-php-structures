<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property int<1, max>|null $Parallelism
 * @property int<1, max>|null $ParallelismPerKPU
 * @property bool|null $AutoScalingEnabled
 */
class ParallelismConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     Parallelism?: int<1, max>|null,
     *     ParallelismPerKPU?: int<1, max>|null,
     *     AutoScalingEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
