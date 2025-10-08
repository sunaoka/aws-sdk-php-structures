<?php

namespace Sunaoka\Aws\Structures\GeoPlaces;

class GeoPlacesClient extends \Aws\GeoPlaces\GeoPlacesClient
{
    use Autocomplete\AutocompleteTrait;
    use Geocode\GeocodeTrait;
    use GetPlace\GetPlaceTrait;
    use ReverseGeocode\ReverseGeocodeTrait;
    use SearchNearby\SearchNearbyTrait;
    use SearchText\SearchTextTrait;
    use Suggest\SuggestTrait;
}
