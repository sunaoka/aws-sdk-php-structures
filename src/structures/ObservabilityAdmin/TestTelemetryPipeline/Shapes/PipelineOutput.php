<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\TestTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Record|null $Record
 * @property PipelineOutputError|null $Error
 */
class PipelineOutput extends Shape
{
    /**
     * @param array{
     *     Record?: Record|null,
     *     Error?: PipelineOutputError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
