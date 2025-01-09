<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CloudWatchApplicationInsights' $provider
 * @property string $providerArn
 */
class MetricSource extends Shape
{
    /**
     * @param array{
     *     provider?: 'CloudWatchApplicationInsights',
     *     providerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
