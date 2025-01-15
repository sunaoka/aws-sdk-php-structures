<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $id
 * @property string|null $resourceConfigurationArn
 * @property string|null $resourceConfigurationId
 * @property string|null $resourceConfigurationName
 * @property string|null $vpcEndpointId
 * @property string|null $vpcEndpointOwner
 */
class ResourceEndpointAssociationSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     id?: string|null,
     *     resourceConfigurationArn?: string|null,
     *     resourceConfigurationId?: string|null,
     *     resourceConfigurationName?: string|null,
     *     vpcEndpointId?: string|null,
     *     vpcEndpointOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
