<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property Address $Address
 * @property int<0, 4294967295> $Distance
 * @property string $Language
 * @property string $PoliticalView
 * @property AutocompleteHighlights $Highlights
 */
class AutocompleteResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress',
     *     Title: string,
     *     Address?: Address,
     *     Distance?: int<0, 4294967295>,
     *     Language?: string,
     *     PoliticalView?: string,
     *     Highlights?: AutocompleteHighlights
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
