<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetNetworkResourceCounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalNetworkId
 * @property string|null $ResourceType
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class GetNetworkResourceCountsRequest extends Request
{
    /**
     * @param array{
     *     GlobalNetworkId: string,
     *     ResourceType?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
