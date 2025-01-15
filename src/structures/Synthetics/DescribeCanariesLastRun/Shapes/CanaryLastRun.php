<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanariesLastRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CanaryName
 * @property CanaryRun|null $LastRun
 */
class CanaryLastRun extends Shape
{
    /**
     * @param array{
     *     CanaryName?: string|null,
     *     LastRun?: CanaryRun|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
