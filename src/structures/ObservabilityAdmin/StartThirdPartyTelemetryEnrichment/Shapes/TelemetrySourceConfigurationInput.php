<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartThirdPartyTelemetryEnrichment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureTelemetrySourceConfigurationInput|null $Azure
 */
class TelemetrySourceConfigurationInput extends Shape
{
    /**
     * @param array{Azure?: AzureTelemetrySourceConfigurationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
