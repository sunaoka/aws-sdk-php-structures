<?php

namespace Sunaoka\Aws\Structures\Route53\ListGeoLocations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GeoLocationDetails> $GeoLocationDetailsList
 * @property bool $IsTruncated
 * @property string|null $NextContinentCode
 * @property string|null $NextCountryCode
 * @property string|null $NextSubdivisionCode
 * @property string $MaxItems
 */
class ListGeoLocationsResponse extends Response
{
}
