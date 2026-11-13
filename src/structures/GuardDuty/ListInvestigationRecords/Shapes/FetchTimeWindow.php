<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property int<1, 120>|null $DurationInMinutes
 */
class FetchTimeWindow extends Shape
{
    /**
     * @param array{
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     DurationInMinutes?: int<1, 120>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
