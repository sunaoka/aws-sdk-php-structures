<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\TestTelemetryPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Record> $Records
 * @property Shapes\TelemetryPipelineConfiguration $Configuration
 * @property 'LOG'|'METRIC'|null $SignalType
 */
class TestTelemetryPipelineRequest extends Request
{
    /**
     * @param array{
     *     Records: list<Shapes\Record>,
     *     Configuration: Shapes\TelemetryPipelineConfiguration,
     *     SignalType?: 'LOG'|'METRIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
