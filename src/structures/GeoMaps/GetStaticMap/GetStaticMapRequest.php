<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStaticMap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BoundingBox
 * @property string|null $BoundedPositions
 * @property string|null $Center
 * @property 'Light'|'Dark'|null $ColorScheme
 * @property string|null $CompactOverlay
 * @property bool|null $CropLabels
 * @property string|null $GeoJsonOverlay
 * @property int<64, 1400> $Height
 * @property string|null $Key
 * @property 'Small'|'Large'|null $LabelSize
 * @property string|null $Language
 * @property int<0, 350>|null $Padding
 * @property string|null $PoliticalView
 * @property 'Enabled'|'Disabled'|null $PointsOfInterests
 * @property int<0, 4294967295>|null $Radius
 * @property string $FileName
 * @property 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers'|null $ScaleBarUnit
 * @property 'Satellite'|'Standard'|null $Style
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
     *     ColorScheme?: 'Light'|'Dark'|null,
     *     CompactOverlay?: string|null,
     *     CropLabels?: bool|null,
     *     GeoJsonOverlay?: string|null,
     *     Height: int<64, 1400>,
     *     Key?: string|null,
     *     LabelSize?: 'Small'|'Large'|null,
     *     Language?: string|null,
     *     Padding?: int<0, 350>|null,
     *     PoliticalView?: string|null,
     *     PointsOfInterests?: 'Enabled'|'Disabled'|null,
     *     Radius?: int<0, 4294967295>|null,
     *     FileName: string,
     *     ScaleBarUnit?: 'Kilometers'|'KilometersMiles'|'Miles'|'MilesKilometers'|null,
     *     Style?: 'Satellite'|'Standard'|null,
     *     Width: int<64, 1400>,
     *     Zoom?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
