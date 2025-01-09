<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $serviceIdentifier
 * @property string $serviceNetworkIdentifier
 */
class ListServiceNetworkServiceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     serviceIdentifier?: string,
     *     serviceNetworkIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
