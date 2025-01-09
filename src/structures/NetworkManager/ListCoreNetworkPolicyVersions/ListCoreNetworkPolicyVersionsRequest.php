<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListCoreNetworkPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CoreNetworkId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListCoreNetworkPolicyVersionsRequest extends Request
{
    /**
     * @param array{
     *     CoreNetworkId: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
