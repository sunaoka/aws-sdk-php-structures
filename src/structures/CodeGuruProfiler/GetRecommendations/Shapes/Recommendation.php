<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $allMatchesCount
 * @property double $allMatchesSum
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Pattern $pattern
 * @property \Aws\Api\DateTimeResult $startTime
 * @property list<MatchShape> $topMatches
 */
class Recommendation extends Shape
{
    /**
     * @param array{
     *     allMatchesCount: int,
     *     allMatchesSum: double,
     *     endTime: \Aws\Api\DateTimeResult,
     *     pattern: Pattern,
     *     startTime: \Aws\Api\DateTimeResult,
     *     topMatches: list<MatchShape>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
