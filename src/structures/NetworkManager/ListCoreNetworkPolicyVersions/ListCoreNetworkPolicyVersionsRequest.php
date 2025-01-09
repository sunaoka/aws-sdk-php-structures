<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListCoreNetworkPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
