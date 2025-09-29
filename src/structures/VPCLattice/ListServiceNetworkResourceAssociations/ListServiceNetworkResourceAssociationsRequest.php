<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceNetworkIdentifier
 * @property string|null $resourceConfigurationIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $includeChildren
 */
class ListServiceNetworkResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkIdentifier?: string|null,
     *     resourceConfigurationIdentifier?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     includeChildren?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
