<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
