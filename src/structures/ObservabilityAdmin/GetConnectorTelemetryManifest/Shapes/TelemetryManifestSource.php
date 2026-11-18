<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AzureScopeItem>|null $Azure
 */
class TelemetryManifestSource extends Shape
{
    /**
     * @param array{Azure?: list<AzureScopeItem>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
