<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PerformanceFactorReferenceRequest> $References
 */
class CpuPerformanceFactorRequest extends Shape
{
    /**
     * @param array{References?: list<PerformanceFactorReferenceRequest>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
