<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM'|null $ConfigurationTypeUpdate
 * @property int<1, max>|null $ParallelismUpdate
 * @property int<1, max>|null $ParallelismPerKPUUpdate
 * @property bool|null $AutoScalingEnabledUpdate
 */
class ParallelismConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM'|null,
     *     ParallelismUpdate?: int<1, max>|null,
     *     ParallelismPerKPUUpdate?: int<1, max>|null,
     *     AutoScalingEnabledUpdate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
