<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $locale
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class GetRecommendationsRequest extends Request
{
    /**
     * @param array{
     *     endTime: \Aws\Api\DateTimeResult,
     *     locale?: string,
     *     profilingGroupName: string,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
