<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $resourceConfigurationIdentifier
 * @property string|null $serviceNetworkIdentifier
 */
class ListServiceNetworkResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resourceConfigurationIdentifier?: string|null,
     *     serviceNetworkIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
