<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PerformanceFactorReference>|null $References
 */
class CpuPerformanceFactor extends Shape
{
    /**
     * @param array{References?: list<PerformanceFactorReference>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
