<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vpcEndpointId
 * @property string|null $vpcId
 * @property string|null $vpcEndpointOwnerId
 * @property string|null $id
 * @property string|null $state
 * @property string|null $serviceNetworkArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ServiceNetworkEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     vpcEndpointId?: string|null,
     *     vpcId?: string|null,
     *     vpcEndpointOwnerId?: string|null,
     *     id?: string|null,
     *     state?: string|null,
     *     serviceNetworkArn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
