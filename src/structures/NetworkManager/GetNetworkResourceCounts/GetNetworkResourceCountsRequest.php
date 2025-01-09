<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string $ResourceType
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class GetNetworkResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ResourceType?: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
