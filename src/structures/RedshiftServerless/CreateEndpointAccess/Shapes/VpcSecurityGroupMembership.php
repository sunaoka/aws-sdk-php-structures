<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $status
 * @property string|null $vpcSecurityGroupId
 */
class VpcSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     status?: string|null,
     *     vpcSecurityGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
