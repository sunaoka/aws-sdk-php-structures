<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionsStatisticsAggregation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $aggregationId
 */
class GetSessionsStatisticsAggregationRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     aggregationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
