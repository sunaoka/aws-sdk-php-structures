<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive' $status
 * @property bool $includeMemberAccounts
 */
class UpdateEnrollmentStatusRequest extends Request
{
    /**
     * @param array{
     *     status: 'Active'|'Inactive',
     *     includeMemberAccounts?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
