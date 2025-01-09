<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property int $Parallelism
 * @property int $ParallelismPerKPU
 * @property bool $AutoScalingEnabled
 */
class ParallelismConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     Parallelism?: int,
     *     ParallelismPerKPU?: int,
     *     AutoScalingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
