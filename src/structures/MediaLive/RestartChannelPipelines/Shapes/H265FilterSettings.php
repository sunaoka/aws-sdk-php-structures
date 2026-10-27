<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemporalFilterSettings|null $TemporalFilterSettings
 * @property BandwidthReductionFilterSettings|null $BandwidthReductionFilterSettings
 * @property AutoFilterSettings|null $AutoFilterSettings
 * @property NoneFilterSettings|null $NoneFilterSettings
 * @property PerceptualFilterSettings|null $PerceptualFilterSettings
 */
class H265FilterSettings extends Shape
{
    /**
     * @param array{
     *     TemporalFilterSettings?: TemporalFilterSettings|null,
     *     BandwidthReductionFilterSettings?: BandwidthReductionFilterSettings|null,
     *     AutoFilterSettings?: AutoFilterSettings|null,
     *     NoneFilterSettings?: NoneFilterSettings|null,
     *     PerceptualFilterSettings?: PerceptualFilterSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
