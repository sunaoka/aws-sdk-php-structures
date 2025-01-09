<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property Total $Total
 */
class UsageAccountResult extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Total?: Total
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
