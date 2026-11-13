<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $RequestCount
 * @property int<0, max>|null $TotalAttempts
 * @property int<0, max>|null $SuspiciousAttempts
 * @property int<0, max>|null $ResetAttempts
 */
class NetworkCounts extends Shape
{
    /**
     * @param array{
     *     RequestCount?: int<0, max>|null,
     *     TotalAttempts?: int<0, max>|null,
     *     SuspiciousAttempts?: int<0, max>|null,
     *     ResetAttempts?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
