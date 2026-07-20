<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AdsRequestTimeoutMilliseconds
 * @property int|null $LiveMaximumAdsPersonalizationTimeMilliseconds
 * @property int|null $VodMaximumAdsPersonalizationTimeMilliseconds
 * @property int|null $PrefetchAdsRequestTimeoutMilliseconds
 * @property int|null $PrefetchMaximumAdsPersonalizationTimeMilliseconds
 */
class AdsPersonalizationTimeouts extends Shape
{
    /**
     * @param array{
     *     AdsRequestTimeoutMilliseconds?: int|null,
     *     LiveMaximumAdsPersonalizationTimeMilliseconds?: int|null,
     *     VodMaximumAdsPersonalizationTimeMilliseconds?: int|null,
     *     PrefetchAdsRequestTimeoutMilliseconds?: int|null,
     *     PrefetchMaximumAdsPersonalizationTimeMilliseconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
