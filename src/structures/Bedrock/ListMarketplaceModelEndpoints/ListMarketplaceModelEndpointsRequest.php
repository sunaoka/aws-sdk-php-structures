<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListMarketplaceModelEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $modelSourceEquals
 */
class ListMarketplaceModelEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     modelSourceEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
