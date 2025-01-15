<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStaticMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BoundingBox
 * @property string|null $BoundedPositions
 * @property string|null $Center
 * @property string|null $CompactOverlay
 * @property string|null $GeoJsonOverlay
 * @property int<64, 1400> $Height
 * @property string|null $Key
 * @property int|null $Padding
 * @property int<0, 4294967295>|null $Radius
 * @property string $FileName
 * @property 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers'|null $ScaleBarUnit
 * @property 'Satellite'|null $Style
 * @property int<64, 1400> $Width
 * @property float|null $Zoom
 */
class GetStaticMapRequest extends Request
{
    /**
     * @param array{
     *     BoundingBox?: string|null,
     *     BoundedPositions?: string|null,
     *     Center?: string|null,
     *     CompactOverlay?: string|null,
     *     GeoJsonOverlay?: string|null,
     *     Height: int<64, 1400>,
     *     Key?: string|null,
     *     Padding?: int|null,
     *     Radius?: int<0, 4294967295>|null,
     *     FileName: string,
     *     ScaleBarUnit?: 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers'|null,
     *     Style?: 'Satellite'|null,
     *     Width: int<64, 1400>,
     *     Zoom?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
