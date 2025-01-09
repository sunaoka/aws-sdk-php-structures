<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $EoCloudCover
 * @property float $LandsatCloudCoverLand
 * @property string $Platform
 * @property float $ViewOffNadir
 * @property float $ViewSunAzimuth
 * @property float $ViewSunElevation
 */
class Properties extends Shape
{
    /**
     * @param array{
     *     EoCloudCover?: float,
     *     LandsatCloudCoverLand?: float,
     *     Platform?: string,
     *     ViewOffNadir?: float,
     *     ViewSunAzimuth?: float,
     *     ViewSunElevation?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
