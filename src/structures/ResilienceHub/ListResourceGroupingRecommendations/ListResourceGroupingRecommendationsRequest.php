<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListResourceGroupingRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
