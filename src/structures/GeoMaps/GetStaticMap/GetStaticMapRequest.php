<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStaticMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BoundingBox
 * @property string $BoundedPositions
 * @property string $Center
 * @property string $CompactOverlay
 * @property string $GeoJsonOverlay
 * @property int<64, 1400> $Height
 * @property string $Key
 * @property int $Padding
 * @property int<0, 4294967295> $Radius
 * @property string $FileName
 * @property 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers' $ScaleBarUnit
 * @property 'Satellite' $Style
 * @property int<64, 1400> $Width
 * @property float $Zoom
 */
class GetStaticMapRequest extends Request
{
    /**
     * @param array{
     *     BoundingBox?: string,
     *     BoundedPositions?: string,
     *     Center?: string,
     *     CompactOverlay?: string,
     *     GeoJsonOverlay?: string,
     *     Height: int<64, 1400>,
     *     Key?: string,
     *     Padding?: int,
     *     Radius?: int<0, 4294967295>,
     *     FileName: string,
     *     ScaleBarUnit?: 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers',
     *     Style?: 'Satellite',
     *     Width: int<64, 1400>,
     *     Zoom?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
