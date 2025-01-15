<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkAclAssociationId
 * @property string|null $NetworkAclId
 * @property string|null $SubnetId
 */
class NetworkAclAssociation extends Shape
{
    /**
     * @param array{
     *     NetworkAclAssociationId?: string|null,
     *     NetworkAclId?: string|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
