<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $IdentityStoreId
 * @property string $InstanceArn
 * @property string $Name
 * @property string $OwnerAccountId
 * @property 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE' $Status
 */
class InstanceMetadata extends Shape
{
    /**
     * @param array{
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     IdentityStoreId?: string,
     *     InstanceArn?: string,
     *     Name?: string,
     *     OwnerAccountId?: string,
     *     Status?: 'CREATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'ACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
