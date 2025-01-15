<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $QueryText
 * @property Shapes\GeocodeQueryComponents|null $QueryComponents
 * @property int<1, 100>|null $MaxResults
 * @property list<double>|null $BiasPosition
 * @property Shapes\GeocodeFilter|null $Filter
 * @property list<'TimeZone'|'Access'>|null $AdditionalFeatures
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property 'SingleUse'|'Storage'|null $IntendedUse
 * @property string|null $Key
 */
class GeocodeRequest extends Request
{
    /**
     * @param array{
     *     QueryText?: string|null,
     *     QueryComponents?: Shapes\GeocodeQueryComponents|null,
     *     MaxResults?: int<1, 100>|null,
     *     BiasPosition?: list<double>|null,
     *     Filter?: Shapes\GeocodeFilter|null,
     *     AdditionalFeatures?: list<'TimeZone'|'Access'>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     IntendedUse?: 'SingleUse'|'Storage'|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
