<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 365> $RetentionDays
 */
class AzureAwsManagedFlowLogs extends Shape
{
    /**
     * @param array{RetentionDays: int<1, 365>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
