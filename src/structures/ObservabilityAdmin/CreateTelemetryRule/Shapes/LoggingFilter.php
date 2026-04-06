<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Filter>|null $Filters
 * @property 'KEEP'|'DROP'|null $DefaultBehavior
 */
class LoggingFilter extends Shape
{
    /**
     * @param array{
     *     Filters?: list<Filter>|null,
     *     DefaultBehavior?: 'KEEP'|'DROP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
