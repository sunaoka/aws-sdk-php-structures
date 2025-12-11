<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListTelemetryPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 */
class Source extends Shape
{
    /**
     * @param array{Type?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
