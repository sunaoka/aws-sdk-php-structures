<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2RecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'>|null $cpuVendorArchitectures
 */
class RecommendationPreferences extends Shape
{
    /**
     * @param array{cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
