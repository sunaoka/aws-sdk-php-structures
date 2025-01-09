<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ResourceType
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetNetworkResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ResourceType?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
