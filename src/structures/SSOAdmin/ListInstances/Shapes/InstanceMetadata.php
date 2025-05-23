<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceArn
 * @property string|null $IdentityStoreId
 * @property string|null $OwnerAccountId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'|null $Status
 */
class InstanceMetadata extends Shape
{
    /**
     * @param array{
     *     InstanceArn?: string|null,
     *     IdentityStoreId?: string|null,
     *     OwnerAccountId?: string|null,
     *     Name?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
