<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateThingRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'On'|'Off' $Telemetry
 */
class TelemetryConfigurationUpdate extends Shape
{
    /**
     * @param array{Telemetry: 'On'|'Off'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
