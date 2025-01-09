<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $frameAddress
 * @property int $targetFramesIndex
 * @property double $thresholdBreachValue
 */
class MatchShape extends Shape
{
    /**
     * @param array{
     *     frameAddress?: string,
     *     targetFramesIndex?: int,
     *     thresholdBreachValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
