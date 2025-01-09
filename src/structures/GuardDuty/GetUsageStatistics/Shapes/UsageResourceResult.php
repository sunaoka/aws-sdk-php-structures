<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Resource
 * @property Total $Total
 */
class UsageResourceResult extends Shape
{
    /**
     * @param array{
     *     Resource?: string,
     *     Total?: Total
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
