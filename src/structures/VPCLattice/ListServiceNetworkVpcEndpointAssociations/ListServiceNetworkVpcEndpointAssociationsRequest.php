<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $serviceNetworkIdentifier
 */
class ListServiceNetworkVpcEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     serviceNetworkIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
