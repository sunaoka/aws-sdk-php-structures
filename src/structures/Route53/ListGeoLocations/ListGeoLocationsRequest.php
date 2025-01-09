<?php

namespace Sunaoka\Aws\Structures\Route53\ListGeoLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StartContinentCode
 * @property string $StartCountryCode
 * @property string $StartSubdivisionCode
 * @property string $MaxItems
 */
class ListGeoLocationsRequest extends Request
{
    /**
     * @param array{
     *     StartContinentCode?: string,
     *     StartCountryCode?: string,
     *     StartSubdivisionCode?: string,
     *     MaxItems?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
