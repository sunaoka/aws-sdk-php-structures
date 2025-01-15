<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property bool|null $includeMemberAccounts
 */
class UpdateEnrollmentStatusRequest extends Request
{
    /**
     * @param array{
     *     status: 'Active'|'Inactive'|'Pending'|'Failed',
     *     includeMemberAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
