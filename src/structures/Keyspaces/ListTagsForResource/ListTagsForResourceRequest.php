<?php

namespace Sunaoka\Aws\Structures\Keyspaces\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
