<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $aggregationId
 * @property int $maxResults
 * @property string $nextToken
 */
class GetSessionsStatisticsAggregationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     aggregationId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
