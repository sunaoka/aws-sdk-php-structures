<?php

namespace Sunaoka\Aws\Structures\AppMesh\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $limit
 * @property string $nextToken
 * @property string $resourceArn
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     limit?: int<1, 50>,
     *     nextToken?: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
