<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSopRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListSopRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
