<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property string $serviceNetworkArn
 * @property string $state
 * @property string $vpcEndpointId
 * @property string $vpcEndpointOwnerId
 * @property string $vpcId
 */
class ServiceNetworkEndpointAssociation extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     serviceNetworkArn?: string,
     *     state?: string,
     *     vpcEndpointId?: string,
     *     vpcEndpointOwnerId?: string,
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
