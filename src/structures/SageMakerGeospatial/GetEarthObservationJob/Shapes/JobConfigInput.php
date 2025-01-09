<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BandMathConfigInput $BandMathConfig
 * @property CloudMaskingConfigInput $CloudMaskingConfig
 * @property CloudRemovalConfigInput $CloudRemovalConfig
 * @property GeoMosaicConfigInput $GeoMosaicConfig
 * @property LandCoverSegmentationConfigInput $LandCoverSegmentationConfig
 * @property ResamplingConfigInput $ResamplingConfig
 * @property StackConfigInput $StackConfig
 * @property TemporalStatisticsConfigInput $TemporalStatisticsConfig
 * @property ZonalStatisticsConfigInput $ZonalStatisticsConfig
 */
class JobConfigInput extends Shape
{
    /**
     * @param array{
     *     BandMathConfig?: BandMathConfigInput,
     *     CloudMaskingConfig?: CloudMaskingConfigInput,
     *     CloudRemovalConfig?: CloudRemovalConfigInput,
     *     GeoMosaicConfig?: GeoMosaicConfigInput,
     *     LandCoverSegmentationConfig?: LandCoverSegmentationConfigInput,
     *     ResamplingConfig?: ResamplingConfigInput,
     *     StackConfig?: StackConfigInput,
     *     TemporalStatisticsConfig?: TemporalStatisticsConfigInput,
     *     ZonalStatisticsConfig?: ZonalStatisticsConfigInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
