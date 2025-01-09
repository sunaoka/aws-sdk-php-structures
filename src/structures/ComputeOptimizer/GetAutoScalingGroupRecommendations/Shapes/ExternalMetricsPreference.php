<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Datadog'|'Dynatrace'|'NewRelic'|'Instana' $source
 */
class ExternalMetricsPreference extends Shape
{
    /**
     * @param array{source?: 'Datadog'|'Dynatrace'|'NewRelic'|'Instana'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
