<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'PARTIAL_SUCCESS'|'FAILED'|null $Status
 * @property int<0, max>|null $SucceededAccountsCount
 * @property int<0, max>|null $FailedAccountsCount
 * @property int<0, max>|null $CompletedAccountsCount
 * @property int<0, max>|null $PendingAccountsCount
 * @property double|null $PercentageCompleted
 */
class RoleProvisioning extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'PARTIAL_SUCCESS'|'FAILED'|null,
     *     SucceededAccountsCount?: int<0, max>|null,
     *     FailedAccountsCount?: int<0, max>|null,
     *     CompletedAccountsCount?: int<0, max>|null,
     *     PendingAccountsCount?: int<0, max>|null,
     *     PercentageCompleted?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
