<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAlarmRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAlarmRecommendationsRequest extends Request
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
