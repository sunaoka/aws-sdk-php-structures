<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CanaryName
 * @property CanaryRun $LastRun
 */
class CanaryLastRun extends Shape
{
    /**
     * @param array{
     *     CanaryName?: string,
     *     LastRun?: CanaryRun
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
