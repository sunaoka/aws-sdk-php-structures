<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationTypeUpdate
 * @property int $ParallelismUpdate
 * @property int $ParallelismPerKPUUpdate
 * @property bool $AutoScalingEnabledUpdate
 */
class ParallelismConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM',
     *     ParallelismUpdate?: int,
     *     ParallelismPerKPUUpdate?: int,
     *     AutoScalingEnabledUpdate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
