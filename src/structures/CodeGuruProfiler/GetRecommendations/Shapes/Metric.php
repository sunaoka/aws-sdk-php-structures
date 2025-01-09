<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $frameName
 * @property list<string> $threadStates
 * @property 'AggregatedRelativeTotalTime' $type
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     frameName: string,
     *     threadStates: list<string>,
     *     type: 'AggregatedRelativeTotalTime'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
