<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemporalFilterSettings|null $TemporalFilterSettings
 * @property BandwidthReductionFilterSettings|null $BandwidthReductionFilterSettings
 */
class H264FilterSettings extends Shape
{
    /**
     * @param array{
     *     TemporalFilterSettings?: TemporalFilterSettings|null,
     *     BandwidthReductionFilterSettings?: BandwidthReductionFilterSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
