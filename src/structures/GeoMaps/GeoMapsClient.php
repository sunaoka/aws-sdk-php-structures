<?php

namespace Sunaoka\Aws\Structures\GeoMaps;

class GeoMapsClient extends \Aws\GeoMaps\GeoMapsClient
{
    use GetGlyphs\GetGlyphsTrait;
    use GetSprites\GetSpritesTrait;
    use GetStaticMap\GetStaticMapTrait;
    use GetStyleDescriptor\GetStyleDescriptorTrait;
    use GetTile\GetTileTrait;
}
