<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AdvancedEventSelector> $AdvancedEventSelectors
 */
class CloudtrailParameters extends Shape
{
    /**
     * @param array{AdvancedEventSelectors: list<AdvancedEventSelector>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
