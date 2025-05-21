<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListEventLogConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN'|null $EventLogLevel
 */
class EventLogConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     EventLogLevel?: 'DEBUG'|'ERROR'|'INFO'|'WARN'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
