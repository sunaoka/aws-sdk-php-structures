<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<double> $QueryPosition
 * @property int<1, 21000000>|null $QueryRadius
 * @property int<1, 100>|null $MaxResults
 * @property Shapes\ReverseGeocodeFilter|null $Filter
 * @property list<'TimeZone'|'Access'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 * @property string|null $Key
 */
class ReverseGeocodeRequest extends Request
{
    /**
     * @param array{
     *     QueryPosition: list<double>,
     *     QueryRadius?: int<1, 21000000>|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filter?: Shapes\ReverseGeocodeFilter|null,
     *     AdditionalFeatures?: list<'TimeZone'|'Access'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|'Storage'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
