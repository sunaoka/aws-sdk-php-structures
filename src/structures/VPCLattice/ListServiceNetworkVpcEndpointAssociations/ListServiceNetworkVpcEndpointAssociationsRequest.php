<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceNetworkIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServiceNetworkVpcEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
