<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelemetryConfiguration $TelemetryConfiguration
 */
class RuntimeConfiguration extends Shape
{
    /**
     * @param array{TelemetryConfiguration?: TelemetryConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
