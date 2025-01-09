<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccountModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'COMPLETED'|'FAILED' $ModificationState
 * @property 'ENABLED'|'DISABLED' $DedicatedTenancySupport
 * @property string $DedicatedTenancyManagementCidrRange
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class AccountModification extends Shape
{
    /**
     * @param array{
     *     ModificationState?: 'PENDING'|'COMPLETED'|'FAILED',
     *     DedicatedTenancySupport?: 'ENABLED'|'DISABLED',
     *     DedicatedTenancyManagementCidrRange?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
