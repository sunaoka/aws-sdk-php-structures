<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property bool $includeMemberAccounts
 */
class UpdateEnrollmentStatusRequest extends Request
{
    /**
     * @param array{
     *     status: 'Active'|'Inactive'|'Pending'|'Failed',
     *     includeMemberAccounts?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
