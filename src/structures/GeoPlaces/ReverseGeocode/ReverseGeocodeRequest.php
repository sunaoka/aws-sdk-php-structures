<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<double> $QueryPosition
 * @property int $QueryRadius
 * @property int $MaxResults
 * @property Shapes\ReverseGeocodeFilter $Filter
 * @property list<'TimeZone'|'Access'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse'|'Storage' $IntendedUse
 * @property string $Key
 */
class ReverseGeocodeRequest extends Request
{
    /**
     * @param array{
     *     QueryPosition: list<double>,
     *     QueryRadius?: int,
     *     MaxResults?: int,
     *     Filter?: Shapes\ReverseGeocodeFilter,
     *     AdditionalFeatures?: list<'TimeZone'|'Access'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse'|'Storage',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
