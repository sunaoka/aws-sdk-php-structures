<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EoCloudCoverInput $EoCloudCover
 * @property LandsatCloudCoverLandInput $LandsatCloudCoverLand
 * @property PlatformInput $Platform
 * @property ViewOffNadirInput $ViewOffNadir
 * @property ViewSunAzimuthInput $ViewSunAzimuth
 * @property ViewSunElevationInput $ViewSunElevation
 */
class Property extends Shape
{
    /**
     * @param array{
     *     EoCloudCover?: EoCloudCoverInput,
     *     LandsatCloudCoverLand?: LandsatCloudCoverLandInput,
     *     Platform?: PlatformInput,
     *     ViewOffNadir?: ViewOffNadirInput,
     *     ViewSunAzimuth?: ViewSunAzimuthInput,
     *     ViewSunElevation?: ViewSunElevationInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
