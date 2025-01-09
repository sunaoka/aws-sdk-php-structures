<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $id
 * @property string $resourceConfigurationArn
 * @property string $resourceConfigurationId
 * @property string $resourceConfigurationName
 * @property string $vpcEndpointId
 * @property string $vpcEndpointOwner
 */
class ResourceEndpointAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     id?: string,
     *     resourceConfigurationArn?: string,
     *     resourceConfigurationId?: string,
     *     resourceConfigurationName?: string,
     *     vpcEndpointId?: string,
     *     vpcEndpointOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
