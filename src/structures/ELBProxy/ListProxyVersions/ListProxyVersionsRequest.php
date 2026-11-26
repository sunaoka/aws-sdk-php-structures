<?php

namespace Sunaoka\Aws\Structures\ELBProxy\ListProxyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'envoy' $type
 * @property int<50, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListProxyVersionsRequest extends Request
{
    /**
     * @param array{
     *     type: 'envoy',
     *     maxResults?: int<50, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
