<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property Address $Address
 * @property bool $AddressNumberCorrected
 * @property list<PostalCodeDetails> $PostalCodeDetails
 * @property list<double> $Position
 * @property int $Distance
 * @property list<double> $MapView
 * @property list<Category> $Categories
 * @property list<FoodType> $FoodTypes
 * @property list<AccessPoint> $AccessPoints
 * @property TimeZone $TimeZone
 * @property string $PoliticalView
 * @property MatchScoreDetails $MatchScores
 */
class GeocodeResultItem extends Shape
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
     *     Distance?: int,
     *     MapView?: list<double>,
     *     Categories?: list<Category>,
     *     FoodTypes?: list<FoodType>,
     *     AccessPoints?: list<AccessPoint>,
     *     TimeZone?: TimeZone,
     *     PoliticalView?: string,
     *     MatchScores?: MatchScoreDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
