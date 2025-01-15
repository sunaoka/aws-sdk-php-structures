<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property Total|null $Total
 */
class UsageTopAccountResult extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Total?: Total|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
