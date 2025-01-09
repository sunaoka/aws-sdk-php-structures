<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationTypeUpdate
 * @property int<1, max> $ParallelismUpdate
 * @property int<1, max> $ParallelismPerKPUUpdate
 * @property bool $AutoScalingEnabledUpdate
 */
class ParallelismConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM',
     *     ParallelismUpdate?: int<1, max>,
     *     ParallelismPerKPUUpdate?: int<1, max>,
     *     AutoScalingEnabledUpdate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
