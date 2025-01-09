<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property string $nextToken
 * @property int $maxResults
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
