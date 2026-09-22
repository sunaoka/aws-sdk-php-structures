<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelemetryRule|null $telemetryRule
 */
class Rule extends Shape
{
    /**
     * @param array{telemetryRule?: TelemetryRule|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
