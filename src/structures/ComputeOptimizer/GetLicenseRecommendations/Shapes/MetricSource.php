<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CloudWatchApplicationInsights'|null $provider
 * @property string|null $providerArn
 */
class MetricSource extends Shape
{
    /**
     * @param array{
     *     provider?: 'CloudWatchApplicationInsights'|null,
     *     providerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
