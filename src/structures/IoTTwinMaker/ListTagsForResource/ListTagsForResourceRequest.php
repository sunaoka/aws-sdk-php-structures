<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property int<0, 200> $maxResults
 * @property string $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     maxResults?: int<0, 200>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
