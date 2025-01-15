<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateThingRuntimeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TelemetryConfigurationUpdate|null $TelemetryConfiguration
 * @property string $ThingName
 */
class UpdateThingRuntimeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TelemetryConfiguration?: Shapes\TelemetryConfigurationUpdate|null,
     *     ThingName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
