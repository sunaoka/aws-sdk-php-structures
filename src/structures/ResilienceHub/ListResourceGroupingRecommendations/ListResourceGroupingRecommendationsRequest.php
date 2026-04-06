<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListResourceGroupingRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
