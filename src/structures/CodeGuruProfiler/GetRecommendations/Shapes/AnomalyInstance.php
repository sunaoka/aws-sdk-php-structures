<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $id
 * @property \Aws\Api\DateTimeResult $startTime
 * @property UserFeedback $userFeedback
 */
class AnomalyInstance extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     id: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     userFeedback?: UserFeedback
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
