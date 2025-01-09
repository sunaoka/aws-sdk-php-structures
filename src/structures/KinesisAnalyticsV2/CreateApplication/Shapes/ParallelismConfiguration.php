<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property int<1, max> $Parallelism
 * @property int<1, max> $ParallelismPerKPU
 * @property bool $AutoScalingEnabled
 */
class ParallelismConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     Parallelism?: int<1, max>,
     *     ParallelismPerKPU?: int<1, max>,
     *     AutoScalingEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
