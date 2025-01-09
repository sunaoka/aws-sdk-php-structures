<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $resourceConfigurationIdentifier
 * @property string $serviceNetworkIdentifier
 */
class ListServiceNetworkResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     resourceConfigurationIdentifier?: string,
     *     serviceNetworkIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
