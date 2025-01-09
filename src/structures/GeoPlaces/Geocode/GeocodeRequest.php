<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryText
 * @property Shapes\GeocodeQueryComponents $QueryComponents
 * @property int<1, 100> $MaxResults
 * @property list<double> $BiasPosition
 * @property Shapes\GeocodeFilter $Filter
 * @property list<'TimeZone'|'Access'> $AdditionalFeatures
 * @property string $Language
 * @property string $PoliticalView
 * @property 'SingleUse'|'Storage' $IntendedUse
 * @property string $Key
 */
class GeocodeRequest extends Request
{
    /**
     * @param array{
     *     QueryText?: string,
     *     QueryComponents?: Shapes\GeocodeQueryComponents,
     *     MaxResults?: int<1, 100>,
     *     BiasPosition?: list<double>,
     *     Filter?: Shapes\GeocodeFilter,
     *     AdditionalFeatures?: list<'TimeZone'|'Access'>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     IntendedUse?: 'SingleUse'|'Storage',
     *     Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
