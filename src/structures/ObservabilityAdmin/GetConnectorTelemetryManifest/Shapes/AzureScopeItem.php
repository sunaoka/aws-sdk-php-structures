<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ResourceLogs'|'Metrics'|'FlowLogs'> $TelemetryTypes
 * @property AzureScope $Scope
 */
class AzureScopeItem extends Shape
{
    /**
     * @param array{
     *     TelemetryTypes: list<'ResourceLogs'|'Metrics'|'FlowLogs'>,
     *     Scope: AzureScope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
