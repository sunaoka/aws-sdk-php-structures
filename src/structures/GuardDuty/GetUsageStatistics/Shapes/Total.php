<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property string $Unit
 */
class Total extends Shape
{
    /**
     * @param array{
     *     Amount?: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
