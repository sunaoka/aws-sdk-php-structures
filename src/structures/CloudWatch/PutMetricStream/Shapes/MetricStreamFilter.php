<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property list<string>|null $MetricNames
 */
class MetricStreamFilter extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     MetricNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
