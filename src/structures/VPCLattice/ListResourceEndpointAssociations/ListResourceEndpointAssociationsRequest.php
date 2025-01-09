<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $resourceConfigurationIdentifier
 * @property string $resourceEndpointAssociationIdentifier
 * @property string $vpcEndpointId
 * @property string $vpcEndpointOwner
 */
class ListResourceEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     resourceConfigurationIdentifier: string,
     *     resourceEndpointAssociationIdentifier?: string,
     *     vpcEndpointId?: string,
     *     vpcEndpointOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
