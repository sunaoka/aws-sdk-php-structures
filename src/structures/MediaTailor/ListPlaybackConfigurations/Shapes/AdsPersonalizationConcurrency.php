<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxConcurrentAdsRequests
 * @property bool|null $EnableVodVastParallelization
 */
class AdsPersonalizationConcurrency extends Shape
{
    /**
     * @param array{
     *     MaxConcurrentAdsRequests?: int|null,
     *     EnableVodVastParallelization?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
