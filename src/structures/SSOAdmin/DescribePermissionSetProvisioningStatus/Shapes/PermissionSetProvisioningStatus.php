<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSetProvisioningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $FailureReason
 * @property string|null $PermissionSetArn
 * @property string|null $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 */
class PermissionSetProvisioningStatus extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     PermissionSetArn?: string|null,
     *     RequestId?: string|null,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
