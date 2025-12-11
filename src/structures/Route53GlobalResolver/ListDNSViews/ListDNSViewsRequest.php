<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListDNSViews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $globalResolverId
 */
class ListDNSViewsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     globalResolverId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
