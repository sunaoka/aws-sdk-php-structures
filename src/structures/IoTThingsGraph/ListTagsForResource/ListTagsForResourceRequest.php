<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250> $maxResults
 * @property string $resourceArn
 * @property string $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>,
     *     resourceArn: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
