<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccountModifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'COMPLETED'|'FAILED'|null $ModificationState
 * @property 'ENABLED'|'DISABLED'|null $DedicatedTenancySupport
 * @property string|null $DedicatedTenancyManagementCidrRange
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class AccountModification extends Shape
{
    /**
     * @param array{
     *     ModificationState?: 'PENDING'|'COMPLETED'|'FAILED'|null,
     *     DedicatedTenancySupport?: 'ENABLED'|'DISABLED'|null,
     *     DedicatedTenancyManagementCidrRange?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
