<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\TestTelemetryPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Data
 * @property 'STRING'|'JSON'|null $Type
 */
class Record extends Shape
{
    /**
     * @param array{
     *     Data?: string|null,
     *     Type?: 'STRING'|'JSON'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
