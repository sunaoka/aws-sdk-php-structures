<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceNetworkIdentifier
 * @property string|null $serviceIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServiceNetworkServiceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkIdentifier?: string|null,
     *     serviceIdentifier?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
