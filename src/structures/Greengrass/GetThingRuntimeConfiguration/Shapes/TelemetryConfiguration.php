<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetThingRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InSync'|'OutOfSync'|null $ConfigurationSyncStatus
 * @property 'On'|'Off' $Telemetry
 */
class TelemetryConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationSyncStatus?: 'InSync'|'OutOfSync'|null,
     *     Telemetry: 'On'|'Off'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
