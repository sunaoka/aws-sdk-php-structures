<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Amount
 * @property string|null $Unit
 */
class Total extends Shape
{
    /**
     * @param array{
     *     Amount?: string|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
