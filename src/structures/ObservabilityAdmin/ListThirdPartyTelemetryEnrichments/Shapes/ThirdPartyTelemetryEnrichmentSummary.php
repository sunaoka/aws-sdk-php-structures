<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListThirdPartyTelemetryEnrichments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'Azure'|null $TelemetrySource
 * @property 'Initializing'|'Running'|'Stopped'|'Impaired'|null $Status
 */
class ThirdPartyTelemetryEnrichmentSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TelemetrySource?: 'Azure'|null,
     *     Status?: 'Initializing'|'Running'|'Stopped'|'Impaired'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
