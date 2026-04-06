<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceConfigurationIdentifier
 * @property string|null $resourceEndpointAssociationIdentifier
 * @property string|null $vpcEndpointId
 * @property string|null $vpcEndpointOwner
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListResourceEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     resourceConfigurationIdentifier: string,
     *     resourceEndpointAssociationIdentifier?: string|null,
     *     vpcEndpointId?: string|null,
     *     vpcEndpointOwner?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
