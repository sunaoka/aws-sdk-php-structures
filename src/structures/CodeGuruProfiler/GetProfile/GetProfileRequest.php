<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accept
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property int<1, 10000>|null $maxDepth
 * @property string|null $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class GetProfileRequest extends Request
{
    /**
     * @param array{
     *     accept?: string|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     maxDepth?: int<1, 10000>|null,
     *     period?: string|null,
     *     profilingGroupName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
