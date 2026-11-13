<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $FirstSeenAt
 * @property \Aws\Api\DateTimeResult|null $LastSeenAt
 */
class ActivityWindow extends Shape
{
    /**
     * @param array{
     *     FirstSeenAt?: \Aws\Api\DateTimeResult|null,
     *     LastSeenAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
