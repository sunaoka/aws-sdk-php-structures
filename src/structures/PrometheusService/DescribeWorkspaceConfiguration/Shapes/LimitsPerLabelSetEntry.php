<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DescribeWorkspaceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $maxSeries
 */
class LimitsPerLabelSetEntry extends Shape
{
    /**
     * @param array{maxSeries?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
