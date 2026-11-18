<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $Active
 * @property int<0, max>|null $Total
 */
class SourceProgress extends Shape
{
    /**
     * @param array{
     *     Active?: int<0, max>|null,
     *     Total?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
