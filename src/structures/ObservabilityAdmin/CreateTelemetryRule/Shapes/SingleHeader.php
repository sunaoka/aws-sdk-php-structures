<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class SingleHeader extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
