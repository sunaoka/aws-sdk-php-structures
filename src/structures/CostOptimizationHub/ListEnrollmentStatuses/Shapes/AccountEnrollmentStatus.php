<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEnrollmentStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'Active'|'Inactive' $status
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class AccountEnrollmentStatus extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     status?: 'Active'|'Inactive',
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     createdTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
