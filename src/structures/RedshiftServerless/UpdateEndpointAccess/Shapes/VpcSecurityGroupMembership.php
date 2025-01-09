<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property string $vpcSecurityGroupId
 */
class VpcSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     status?: string,
     *     vpcSecurityGroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
