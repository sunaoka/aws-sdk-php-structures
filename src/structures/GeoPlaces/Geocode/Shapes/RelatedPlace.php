<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress' $PlaceType
 * @property string $Title
 * @property Address|null $Address
 * @property list<double>|null $Position
 * @property list<AccessPoint>|null $AccessPoints
 */
class RelatedPlace extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress',
     *     Title: string,
     *     Address?: Address|null,
     *     Position?: list<double>|null,
     *     AccessPoints?: list<AccessPoint>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
