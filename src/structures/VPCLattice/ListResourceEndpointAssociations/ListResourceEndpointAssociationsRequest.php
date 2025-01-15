<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $resourceConfigurationIdentifier
 * @property string|null $resourceEndpointAssociationIdentifier
 * @property string|null $vpcEndpointId
 * @property string|null $vpcEndpointOwner
 */
class ListResourceEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resourceConfigurationIdentifier: string,
     *     resourceEndpointAssociationIdentifier?: string|null,
     *     vpcEndpointId?: string|null,
     *     vpcEndpointOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
