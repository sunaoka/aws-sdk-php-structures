<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationName
 * @property string|null $vpcEndpointId
 * @property string|null $vpcEndpointOwner
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ResourceEndpointAssociationSummary extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     resourceConfigurationId?: string|null,
     *     resourceConfigurationArn?: string|null,
     *     resourceConfigurationName?: string|null,
     *     vpcEndpointId?: string|null,
     *     vpcEndpointOwner?: string|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
