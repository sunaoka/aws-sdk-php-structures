<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListMarketplaceModelEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $modelSourceEquals
 */
class ListMarketplaceModelEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     modelSourceEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
