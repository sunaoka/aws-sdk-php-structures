<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property Address $Address
 * @property bool $AddressNumberCorrected
 * @property list<PostalCodeDetails> $PostalCodeDetails
 * @property list<double> $Position
 * @property int<0, 4294967295> $Distance
 * @property list<double> $MapView
 * @property list<Category> $Categories
 * @property list<FoodType> $FoodTypes
 * @property list<AccessPoint> $AccessPoints
 * @property TimeZone $TimeZone
 * @property string $PoliticalView
 */
class ReverseGeocodeResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress',
     *     Title: string,
     *     Address?: Address,
     *     AddressNumberCorrected?: bool,
     *     PostalCodeDetails?: list<PostalCodeDetails>,
     *     Position?: list<double>,
     *     Distance?: int<0, 4294967295>,
     *     MapView?: list<double>,
     *     Categories?: list<Category>,
     *     FoodTypes?: list<FoodType>,
     *     AccessPoints?: list<AccessPoint>,
     *     TimeZone?: TimeZone,
     *     PoliticalView?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
