<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $EoCloudCover
 * @property float|null $LandsatCloudCoverLand
 * @property string|null $Platform
 * @property float|null $ViewOffNadir
 * @property float|null $ViewSunAzimuth
 * @property float|null $ViewSunElevation
 */
class Properties extends Shape
{
    /**
     * @param array{
     *     EoCloudCover?: float|null,
     *     LandsatCloudCoverLand?: float|null,
     *     Platform?: string|null,
     *     ViewOffNadir?: float|null,
     *     ViewSunAzimuth?: float|null,
     *     ViewSunElevation?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
