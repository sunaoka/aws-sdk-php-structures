<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $RequestId
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $Status
 */
class PermissionSetProvisioningStatusMetadata extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     RequestId?: string|null,
     *     Status?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
