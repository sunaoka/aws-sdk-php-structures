<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null $status
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $serviceNetworkId
 * @property string|null $serviceNetworkName
 * @property string|null $serviceNetworkArn
 * @property string|null $vpcId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 */
class ServiceNetworkVpcAssociationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED'|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     serviceNetworkId?: string|null,
     *     serviceNetworkName?: string|null,
     *     serviceNetworkArn?: string|null,
     *     vpcId?: string|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
