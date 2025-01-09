<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $lastUpdatedTimestamp
 */
class AccountEnrollmentStatus extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     status?: 'Active'|'Inactive'|'Pending'|'Failed',
     *     statusReason?: string,
     *     lastUpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
