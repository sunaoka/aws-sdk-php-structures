<?php

namespace Sunaoka\Aws\Structures\Route53\ListGeoLocations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GeoLocationDetails> $GeoLocationDetailsList
 * @property bool $IsTruncated
 * @property string $NextContinentCode
 * @property string $NextCountryCode
 * @property string $NextSubdivisionCode
 * @property string $MaxItems
 */
class ListGeoLocationsResponse extends Response
{
}
