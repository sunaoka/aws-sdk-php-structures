<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property Address $Address
 * @property list<double> $Position
 * @property int<0, 4294967295> $Distance
 * @property list<double> $MapView
 * @property list<Category> $Categories
 * @property list<FoodType> $FoodTypes
 * @property list<BusinessChain> $BusinessChains
 * @property list<AccessPoint> $AccessPoints
 * @property list<AccessRestriction> $AccessRestrictions
 * @property TimeZone $TimeZone
 * @property string $PoliticalView
 * @property PhonemeDetails $Phonemes
 */
class SuggestPlaceResult extends Shape
{
    /**
     * @param array{
     *     PlaceId?: string,
     *     PlaceType?: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress',
     *     Address?: Address,
     *     Position?: list<double>,
     *     Distance?: int<0, 4294967295>,
     *     MapView?: list<double>,
     *     Categories?: list<Category>,
     *     FoodTypes?: list<FoodType>,
     *     BusinessChains?: list<BusinessChain>,
     *     AccessPoints?: list<AccessPoint>,
     *     AccessRestrictions?: list<AccessRestriction>,
     *     TimeZone?: TimeZone,
     *     PoliticalView?: string,
     *     Phonemes?: PhonemeDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
