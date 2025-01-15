<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Datadog'|'Dynatrace'|'NewRelic'|'Instana'|null $source
 */
class ExternalMetricsPreference extends Shape
{
    /**
     * @param array{source?: 'Datadog'|'Dynatrace'|'NewRelic'|'Instana'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
