<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $serviceNetworkArn
 * @property string $serviceNetworkId
 * @property string $serviceNetworkName
 * @property 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED' $status
 * @property string $vpcId
 */
class ServiceNetworkVpcAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     id?: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     serviceNetworkArn?: string,
     *     serviceNetworkId?: string,
     *     serviceNetworkName?: string,
     *     status?: 'CREATE_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_FAILED'|'UPDATE_FAILED',
     *     vpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
