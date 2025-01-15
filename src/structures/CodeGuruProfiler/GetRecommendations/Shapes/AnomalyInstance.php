<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $id
 * @property \Aws\Api\DateTimeResult $startTime
 * @property UserFeedback|null $userFeedback
 */
class AnomalyInstance extends Shape
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     id: string,
     *     startTime: \Aws\Api\DateTimeResult,
     *     userFeedback?: UserFeedback|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
