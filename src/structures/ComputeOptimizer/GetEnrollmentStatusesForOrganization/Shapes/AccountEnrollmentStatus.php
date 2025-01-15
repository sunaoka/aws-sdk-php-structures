<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'Active'|'Inactive'|'Pending'|'Failed'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTimestamp
 */
class AccountEnrollmentStatus extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     status?: 'Active'|'Inactive'|'Pending'|'Failed'|null,
     *     statusReason?: string|null,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
