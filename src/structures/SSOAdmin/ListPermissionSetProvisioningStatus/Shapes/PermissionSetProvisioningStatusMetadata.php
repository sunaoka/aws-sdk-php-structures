<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 * @property string|null $RequestId
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class PermissionSetProvisioningStatusMetadata extends Shape
{
    /**
     * @param array{
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     RequestId?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
