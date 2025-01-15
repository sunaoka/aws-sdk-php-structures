<?php

namespace Sunaoka\Aws\Structures\Route53\ListGeoLocations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StartContinentCode
 * @property string|null $StartCountryCode
 * @property string|null $StartSubdivisionCode
 * @property string|null $MaxItems
 */
class ListGeoLocationsRequest extends Request
{
    /**
     * @param array{
     *     StartContinentCode?: string|null,
     *     StartCountryCode?: string|null,
     *     StartSubdivisionCode?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
