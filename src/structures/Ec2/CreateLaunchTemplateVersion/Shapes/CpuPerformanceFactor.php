<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PerformanceFactorReference> $References
 */
class CpuPerformanceFactor extends Shape
{
    /**
     * @param array{References?: list<PerformanceFactorReference>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
