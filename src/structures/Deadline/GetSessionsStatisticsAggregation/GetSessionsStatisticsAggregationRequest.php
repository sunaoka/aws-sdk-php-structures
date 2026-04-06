<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aggregationId
 * @property string $farmId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetSessionsStatisticsAggregationRequest extends Request
{
    /**
     * @param array{
     *     aggregationId: string,
     *     farmId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
