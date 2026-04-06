<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\UpdateTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'plain'|'json'|null $OutputFormat
 * @property string|null $FieldDelimiter
 */
class ELBLoadBalancerLoggingParameters extends Shape
{
    /**
     * @param array{
     *     OutputFormat?: 'plain'|'json'|null,
     *     FieldDelimiter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
