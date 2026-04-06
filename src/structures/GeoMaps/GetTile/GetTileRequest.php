<?php

namespace Sunaoka\Aws\Structures\GeoMaps\GetTile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'ContourLines'|'Hillshade'|'Logistics'|'Transit'>|null $AdditionalFeatures
 * @property string $Tileset
 * @property string $Z
 * @property string $X
 * @property string $Y
 * @property string|null $Key
 */
class GetTileRequest extends Request
{
    /**
     * @param array{
     *     AdditionalFeatures?: list<'ContourLines'|'Hillshade'|'Logistics'|'Transit'>|null,
     *     Tileset: string,
     *     Z: string,
     *     X: string,
     *     Y: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
