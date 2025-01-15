<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $id
 * @property string|null $serviceNetworkArn
 * @property string|null $state
 * @property string|null $vpcEndpointId
 * @property string|null $vpcEndpointOwnerId
 * @property string|null $vpcId
 */
class ServiceNetworkEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     id?: string|null,
     *     serviceNetworkArn?: string|null,
     *     state?: string|null,
     *     vpcEndpointId?: string|null,
     *     vpcEndpointOwnerId?: string|null,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
