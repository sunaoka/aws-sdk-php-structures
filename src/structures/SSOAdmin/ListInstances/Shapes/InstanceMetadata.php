<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property string|null $IdentityStoreId
 * @property string|null $InstanceArn
 * @property string|null $Name
 * @property string|null $OwnerAccountId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'|null $Status
 */
class InstanceMetadata extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     IdentityStoreId?: string|null,
     *     InstanceArn?: string|null,
     *     Name?: string|null,
     *     OwnerAccountId?: string|null,
     *     Status?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
