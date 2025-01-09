<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemporalFilterSettings $TemporalFilterSettings
 * @property BandwidthReductionFilterSettings $BandwidthReductionFilterSettings
 */
class H265FilterSettings extends Shape
{
    /**
     * @param array{
     *     TemporalFilterSettings?: TemporalFilterSettings,
     *     BandwidthReductionFilterSettings?: BandwidthReductionFilterSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
