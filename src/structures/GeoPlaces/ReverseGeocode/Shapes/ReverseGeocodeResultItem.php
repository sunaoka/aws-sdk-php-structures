<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress' $PlaceType
 * @property string $Title
 * @property Address|null $Address
 * @property bool|null $AddressNumberCorrected
 * @property list<PostalCodeDetails>|null $PostalCodeDetails
 * @property list<double>|null $Position
 * @property int<0, 4294967295>|null $Distance
 * @property list<double>|null $MapView
 * @property list<Category>|null $Categories
 * @property list<FoodType>|null $FoodTypes
 * @property list<AccessPoint>|null $AccessPoints
 * @property TimeZone|null $TimeZone
 * @property string|null $PoliticalView
 * @property list<Intersection>|null $Intersections
 */
class ReverseGeocodeResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress',
     *     Title: string,
     *     Address?: Address|null,
     *     AddressNumberCorrected?: bool|null,
     *     PostalCodeDetails?: list<PostalCodeDetails>|null,
     *     Position?: list<double>|null,
     *     Distance?: int<0, 4294967295>|null,
     *     MapView?: list<double>|null,
     *     Categories?: list<Category>|null,
     *     FoodTypes?: list<FoodType>|null,
     *     AccessPoints?: list<AccessPoint>|null,
     *     TimeZone?: TimeZone|null,
     *     PoliticalView?: string|null,
     *     Intersections?: list<Intersection>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
