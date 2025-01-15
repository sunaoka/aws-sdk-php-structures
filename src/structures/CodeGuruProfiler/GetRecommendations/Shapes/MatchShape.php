<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $frameAddress
 * @property int|null $targetFramesIndex
 * @property double|null $thresholdBreachValue
 */
class MatchShape extends Shape
{
    /**
     * @param array{
     *     frameAddress?: string|null,
     *     targetFramesIndex?: int|null,
     *     thresholdBreachValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
