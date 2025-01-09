<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Dimension> $Dimensions
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     MetricName?: string,
     *     Dimensions?: list<Dimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
