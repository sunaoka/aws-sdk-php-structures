<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 */
class TelemetryPipelineConfiguration extends Shape
{
    /**
     * @param array{Body: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
