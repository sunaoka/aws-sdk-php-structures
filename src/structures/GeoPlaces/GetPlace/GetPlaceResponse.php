<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PlaceId
 * @property 'Country'|'Region'|'SubRegion'|'Locality'|'District'|'SubDistrict'|'PostalCode'|'Block'|'SubBlock'|'Intersection'|'Street'|'PointOfInterest'|'PointAddress'|'InterpolatedAddress' $PlaceType
 * @property string $Title
 * @property string $PricingBucket
 * @property Shapes\Address $Address
 * @property bool $AddressNumberCorrected
 * @property list<Shapes\PostalCodeDetails> $PostalCodeDetails
 * @property list<double> $Position
 * @property list<double> $MapView
 * @property list<Shapes\Category> $Categories
 * @property list<Shapes\FoodType> $FoodTypes
 * @property list<Shapes\BusinessChain> $BusinessChains
 * @property Shapes\Contacts $Contacts
 * @property list<Shapes\OpeningHours> $OpeningHours
 * @property list<Shapes\AccessPoint> $AccessPoints
 * @property list<Shapes\AccessRestriction> $AccessRestrictions
 * @property Shapes\TimeZone $TimeZone
 * @property string $PoliticalView
 * @property Shapes\PhonemeDetails $Phonemes
 */
class GetPlaceResponse extends Response
{
}
