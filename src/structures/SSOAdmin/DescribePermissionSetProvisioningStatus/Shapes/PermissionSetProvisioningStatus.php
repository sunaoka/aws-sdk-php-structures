<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSetProvisioningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 * @property string|null $RequestId
 * @property string|null $AccountId
 * @property string|null $PermissionSetArn
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class PermissionSetProvisioningStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     RequestId?: string|null,
     *     AccountId?: string|null,
     *     PermissionSetArn?: string|null,
     *     FailureReason?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
