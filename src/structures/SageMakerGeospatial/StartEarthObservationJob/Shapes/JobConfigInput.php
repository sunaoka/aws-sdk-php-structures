<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BandMathConfigInput|null $BandMathConfig
 * @property CloudMaskingConfigInput|null $CloudMaskingConfig
 * @property CloudRemovalConfigInput|null $CloudRemovalConfig
 * @property GeoMosaicConfigInput|null $GeoMosaicConfig
 * @property LandCoverSegmentationConfigInput|null $LandCoverSegmentationConfig
 * @property ResamplingConfigInput|null $ResamplingConfig
 * @property StackConfigInput|null $StackConfig
 * @property TemporalStatisticsConfigInput|null $TemporalStatisticsConfig
 * @property ZonalStatisticsConfigInput|null $ZonalStatisticsConfig
 */
class JobConfigInput extends Shape
{
    /**
     * @param array{
     *     BandMathConfig?: BandMathConfigInput|null,
     *     CloudMaskingConfig?: CloudMaskingConfigInput|null,
     *     CloudRemovalConfig?: CloudRemovalConfigInput|null,
     *     GeoMosaicConfig?: GeoMosaicConfigInput|null,
     *     LandCoverSegmentationConfig?: LandCoverSegmentationConfigInput|null,
     *     ResamplingConfig?: ResamplingConfigInput|null,
     *     StackConfig?: StackConfigInput|null,
     *     TemporalStatisticsConfig?: TemporalStatisticsConfigInput|null,
     *     ZonalStatisticsConfig?: ZonalStatisticsConfigInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
