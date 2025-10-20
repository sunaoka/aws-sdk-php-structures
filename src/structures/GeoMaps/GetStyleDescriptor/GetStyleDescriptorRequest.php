<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetStyleDescriptor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Standard'|'Monochrome'|'Hybrid'|'Satellite' $Style
 * @property 'Light'|'Dark'|null $ColorScheme
 * @property string|null $PoliticalView
 * @property 'Hillshade'|null $Terrain
 * @property 'Medium'|null $ContourDensity
 * @property 'All'|null $Traffic
 * @property list<'Transit'|'Truck'>|null $TravelModes
 * @property string|null $Key
 */
class GetStyleDescriptorRequest extends Request
{
    /**
     * @param array{
     *     Style: 'Standard'|'Monochrome'|'Hybrid'|'Satellite',
     *     ColorScheme?: 'Light'|'Dark'|null,
     *     PoliticalView?: string|null,
     *     Terrain?: 'Hillshade'|null,
     *     ContourDensity?: 'Medium'|null,
     *     Traffic?: 'All'|null,
     *     TravelModes?: list<'Transit'|'Truck'>|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
