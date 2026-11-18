<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelemetryManifestSource $Source
 * @property TelemetryManifestInfrastructure|null $Infrastructure
 */
class TelemetryManifest extends Shape
{
    /**
     * @param array{
     *     Source: TelemetryManifestSource,
     *     Infrastructure?: TelemetryManifestInfrastructure|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
