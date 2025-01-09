<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricType
 * @property list<Dimension> $Dimensions
 * @property string $MetricName
 */
class MetricReference extends Shape
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricType: string,
     *     Dimensions?: list<Dimension>,
     *     MetricName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
