<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchNearby\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property Address $Address
 * @property bool $AddressNumberCorrected
 * @property list<double> $Position
 * @property int $Distance
 * @property list<double> $MapView
 * @property list<Category> $Categories
 * @property list<FoodType> $FoodTypes
 * @property list<BusinessChain> $BusinessChains
 * @property Contacts $Contacts
 * @property list<OpeningHours> $OpeningHours
 * @property list<AccessPoint> $AccessPoints
 * @property list<AccessRestriction> $AccessRestrictions
 * @property TimeZone $TimeZone
 * @property string $PoliticalView
 * @property PhonemeDetails $Phonemes
 */
class SearchNearbyResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress',
     *     Title: string,
     *     Address?: Address,
     *     AddressNumberCorrected?: bool,
     *     Position?: list<double>,
     *     Distance?: int,
     *     MapView?: list<double>,
     *     Categories?: list<Category>,
     *     FoodTypes?: list<FoodType>,
     *     BusinessChains?: list<BusinessChain>,
     *     Contacts?: Contacts,
     *     OpeningHours?: list<OpeningHours>,
     *     AccessPoints?: list<AccessPoint>,
     *     AccessRestrictions?: list<AccessRestriction>,
     *     TimeZone?: TimeZone,
     *     PoliticalView?: string,
     *     Phonemes?: PhonemeDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
