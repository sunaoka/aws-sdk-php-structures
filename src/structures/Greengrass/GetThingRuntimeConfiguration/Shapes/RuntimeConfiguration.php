<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelemetryConfiguration|null $TelemetryConfiguration
 */
class RuntimeConfiguration extends Shape
{
    /**
     * @param array{TelemetryConfiguration?: TelemetryConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
