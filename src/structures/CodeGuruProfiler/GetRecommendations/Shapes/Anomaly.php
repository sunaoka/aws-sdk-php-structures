<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AnomalyInstance> $instances
 * @property Metric $metric
 * @property string $reason
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     instances: list<AnomalyInstance>,
     *     metric: Metric,
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
