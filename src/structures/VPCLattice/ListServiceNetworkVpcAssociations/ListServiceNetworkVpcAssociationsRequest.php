<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkVpcAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceNetworkIdentifier
 * @property string|null $vpcIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListServiceNetworkVpcAssociationsRequest extends Request
{
    /**
     * @param array{
     *     serviceNetworkIdentifier?: string|null,
     *     vpcIdentifier?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
