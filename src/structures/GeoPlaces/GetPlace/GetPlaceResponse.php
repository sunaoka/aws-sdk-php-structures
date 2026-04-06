<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress'|'SecondaryAddress'|'InferredSecondaryAddress' $PlaceType
 * @property string $Title
 * @property string $PricingBucket
 * @property Shapes\Address|null $Address
 * @property bool|null $AddressNumberCorrected
 * @property list<Shapes\PostalCodeDetails>|null $PostalCodeDetails
 * @property list<double>|null $Position
 * @property list<double>|null $MapView
 * @property list<Shapes\Category>|null $Categories
 * @property list<Shapes\FoodType>|null $FoodTypes
 * @property list<Shapes\BusinessChain>|null $BusinessChains
 * @property Shapes\Contacts|null $Contacts
 * @property list<Shapes\OpeningHours>|null $OpeningHours
 * @property list<Shapes\AccessPoint>|null $AccessPoints
 * @property list<Shapes\AccessRestriction>|null $AccessRestrictions
 * @property Shapes\TimeZone|null $TimeZone
 * @property string|null $PoliticalView
 * @property Shapes\PhonemeDetails|null $Phonemes
 * @property Shapes\RelatedPlace|null $MainAddress
 * @property list<Shapes\RelatedPlace>|null $SecondaryAddresses
 */
class GetPlaceResponse extends Response
{
}
