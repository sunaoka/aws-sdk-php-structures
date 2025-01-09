<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListResourceGroupingRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
