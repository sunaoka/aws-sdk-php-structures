<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ProvisionPermissionSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $FailureReason
 * @property string $PermissionSetArn
 * @property string $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 */
class PermissionSetProvisioningStatus extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     PermissionSetArn?: string,
     *     RequestId?: string,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
