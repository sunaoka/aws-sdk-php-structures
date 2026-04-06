<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\TestTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class PipelineOutputError extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
