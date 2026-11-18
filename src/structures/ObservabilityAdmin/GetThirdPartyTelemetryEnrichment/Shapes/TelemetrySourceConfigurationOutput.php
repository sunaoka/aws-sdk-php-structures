<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetThirdPartyTelemetryEnrichment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureTelemetrySourceConfigurationOutput|null $Azure
 */
class TelemetrySourceConfigurationOutput extends Shape
{
    /**
     * @param array{Azure?: AzureTelemetrySourceConfigurationOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
