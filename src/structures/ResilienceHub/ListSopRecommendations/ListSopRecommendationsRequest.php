<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSopRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
