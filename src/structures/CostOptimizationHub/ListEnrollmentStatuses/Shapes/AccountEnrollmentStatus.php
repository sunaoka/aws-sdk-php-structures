<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEnrollmentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'Active'|'Inactive'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 */
class AccountEnrollmentStatus extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     status?: 'Active'|'Inactive'|null,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
