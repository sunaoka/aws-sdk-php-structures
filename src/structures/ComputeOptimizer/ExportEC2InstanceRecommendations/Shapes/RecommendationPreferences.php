<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEC2InstanceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_ARM64'|'CURRENT'> $cpuVendorArchitectures
 */
class RecommendationPreferences extends Shape
{
    /**
     * @param array{cpuVendorArchitectures?: list<'AWS_ARM64'|'CURRENT'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
