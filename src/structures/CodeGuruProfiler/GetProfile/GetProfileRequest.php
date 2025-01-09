<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accept
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 10000> $maxDepth
 * @property string $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 */
class GetProfileRequest extends Request
{
    /**
     * @param array{
     *     accept?: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     maxDepth?: int<1, 10000>,
     *     period?: string,
     *     profilingGroupName: string,
     *     startTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
