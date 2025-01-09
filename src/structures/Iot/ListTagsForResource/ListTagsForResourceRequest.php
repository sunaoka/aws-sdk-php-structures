<?php

namespace Sunaoka\Aws\Structures\Iot\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
