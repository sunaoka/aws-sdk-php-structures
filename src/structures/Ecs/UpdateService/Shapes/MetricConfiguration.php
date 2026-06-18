<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $metricNames
 * @property int<20, 60> $resolutionSeconds
 */
class MetricConfiguration extends Shape
{
    /**
     * @param array{
     *     metricNames: list<string>,
     *     resolutionSeconds: int<20, 60>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
