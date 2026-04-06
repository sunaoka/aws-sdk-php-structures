<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\UpdateEnrollmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive' $status
 * @property bool|null $includeMemberAccounts
 */
class UpdateEnrollmentStatusRequest extends Request
{
    /**
     * @param array{
     *     status: 'Active'|'Inactive',
     *     includeMemberAccounts?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
