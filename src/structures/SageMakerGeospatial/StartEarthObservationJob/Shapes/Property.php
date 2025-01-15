<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EoCloudCoverInput|null $EoCloudCover
 * @property LandsatCloudCoverLandInput|null $LandsatCloudCoverLand
 * @property PlatformInput|null $Platform
 * @property ViewOffNadirInput|null $ViewOffNadir
 * @property ViewSunAzimuthInput|null $ViewSunAzimuth
 * @property ViewSunElevationInput|null $ViewSunElevation
 */
class Property extends Shape
{
    /**
     * @param array{
     *     EoCloudCover?: EoCloudCoverInput|null,
     *     LandsatCloudCoverLand?: LandsatCloudCoverLandInput|null,
     *     Platform?: PlatformInput|null,
     *     ViewOffNadir?: ViewOffNadirInput|null,
     *     ViewSunAzimuth?: ViewSunAzimuthInput|null,
     *     ViewSunElevation?: ViewSunElevationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
