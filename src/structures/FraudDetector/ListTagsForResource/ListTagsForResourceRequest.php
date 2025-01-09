<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property string $nextToken
 * @property int<50, 50> $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     nextToken?: string,
     *     maxResults?: int<50, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
