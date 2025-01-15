<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 250>|null $maxResults
 * @property string $resourceArn
 * @property string|null $nextToken
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 250>|null,
     *     resourceArn: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
