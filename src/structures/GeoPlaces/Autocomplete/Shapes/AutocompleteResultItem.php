<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property Address|null $Address
 * @property int<0, 4294967295>|null $Distance
 * @property string|null $Language
 * @property string|null $PoliticalView
 * @property AutocompleteHighlights|null $Highlights
 */
class AutocompleteResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress',
     *     Title: string,
     *     Address?: Address|null,
     *     Distance?: int<0, 4294967295>|null,
     *     Language?: string|null,
     *     PoliticalView?: string|null,
     *     Highlights?: AutocompleteHighlights|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
