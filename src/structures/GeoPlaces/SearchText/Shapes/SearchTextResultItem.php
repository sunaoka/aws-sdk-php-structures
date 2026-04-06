<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress' $PlaceType
 * @property string $Title
 * @property Address|null $Address
 * @property bool|null $AddressNumberCorrected
 * @property list<double>|null $Position
 * @property int<0, 4294967295>|null $Distance
 * @property list<double>|null $MapView
 * @property list<Category>|null $Categories
 * @property list<FoodType>|null $FoodTypes
 * @property list<BusinessChain>|null $BusinessChains
 * @property Contacts|null $Contacts
 * @property list<OpeningHours>|null $OpeningHours
 * @property list<AccessPoint>|null $AccessPoints
 * @property list<AccessRestriction>|null $AccessRestrictions
 * @property TimeZone|null $TimeZone
 * @property string|null $PoliticalView
 * @property PhonemeDetails|null $Phonemes
 */
class SearchTextResultItem extends Shape
{
    /**
     * @param array{
     *     PlaceId: string,
     *     PlaceType: 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress',
     *     Title: string,
     *     Address?: Address|null,
     *     AddressNumberCorrected?: bool|null,
     *     Position?: list<double>|null,
     *     Distance?: int<0, 4294967295>|null,
     *     MapView?: list<double>|null,
     *     Categories?: list<Category>|null,
     *     FoodTypes?: list<FoodType>|null,
     *     BusinessChains?: list<BusinessChain>|null,
     *     Contacts?: Contacts|null,
     *     OpeningHours?: list<OpeningHours>|null,
     *     AccessPoints?: list<AccessPoint>|null,
     *     AccessRestrictions?: list<AccessRestriction>|null,
     *     TimeZone?: TimeZone|null,
     *     PoliticalView?: string|null,
     *     Phonemes?: PhonemeDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
