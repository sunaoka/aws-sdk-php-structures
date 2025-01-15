<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Resource
 * @property Total|null $Total
 */
class UsageResourceResult extends Shape
{
    /**
     * @param array{
     *     Resource?: string|null,
     *     Total?: Total|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
