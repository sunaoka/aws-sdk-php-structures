<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListDiscoveryStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'API_GATEWAY'|'ELB'|'CLOUDFRONT'|null $discoverySource
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListDiscoveryStatusesRequest extends Request
{
    /**
     * @param array{
     *     discoverySource?: 'API_GATEWAY'|'ELB'|'CLOUDFRONT'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
