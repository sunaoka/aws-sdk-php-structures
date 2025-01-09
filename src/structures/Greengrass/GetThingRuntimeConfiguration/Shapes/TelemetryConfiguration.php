<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InSync'|'OutOfSync' $ConfigurationSyncStatus
 * @property 'On'|'Off' $Telemetry
 */
class TelemetryConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationSyncStatus?: 'InSync'|'OutOfSync',
     *     Telemetry: 'On'|'Off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
