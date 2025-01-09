<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property list<string> $MetricNames
 */
class MetricStreamFilter extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
