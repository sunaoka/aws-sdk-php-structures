<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
