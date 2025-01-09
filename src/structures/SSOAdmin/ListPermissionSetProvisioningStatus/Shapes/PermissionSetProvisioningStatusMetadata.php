<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED' $Status
 */
class PermissionSetProvisioningStatusMetadata extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     RequestId?: string,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
