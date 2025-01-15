<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property string|null $nextToken
 * @property int<50, 50>|null $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     nextToken?: string|null,
     *     maxResults?: int<50, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
