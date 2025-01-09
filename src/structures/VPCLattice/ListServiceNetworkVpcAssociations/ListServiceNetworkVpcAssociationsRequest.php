<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $serviceNetworkIdentifier
 * @property string $vpcIdentifier
 */
class ListServiceNetworkVpcAssociationsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     serviceNetworkIdentifier?: string,
     *     vpcIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
