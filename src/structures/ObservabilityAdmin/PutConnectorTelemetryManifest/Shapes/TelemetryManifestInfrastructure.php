<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureInfrastructure|null $Azure
 */
class TelemetryManifestInfrastructure extends Shape
{
    /**
     * @param array{Azure?: AzureInfrastructure|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
