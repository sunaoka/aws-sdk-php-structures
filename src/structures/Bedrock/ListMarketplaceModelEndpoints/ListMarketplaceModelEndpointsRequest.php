<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListMarketplaceModelEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $modelSourceEquals
 */
class ListMarketplaceModelEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     modelSourceEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
