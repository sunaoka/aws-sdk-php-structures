<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 */
class TelemetryPipelineStatusReason extends Shape
{
    /**
     * @param array{Description?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
