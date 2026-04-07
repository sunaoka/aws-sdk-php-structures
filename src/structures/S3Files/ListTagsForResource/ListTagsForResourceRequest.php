<?php

namespace Sunaoka\Aws\Structures\S3Files\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceId
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceId: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
