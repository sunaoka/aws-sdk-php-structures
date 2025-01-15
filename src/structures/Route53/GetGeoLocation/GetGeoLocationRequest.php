<?php

namespace Sunaoka\Aws\Structures\Route53\GetGeoLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContinentCode
 * @property string|null $CountryCode
 * @property string|null $SubdivisionCode
 */
class GetGeoLocationRequest extends Request
{
    /**
     * @param array{
     *     ContinentCode?: string|null,
     *     CountryCode?: string|null,
     *     SubdivisionCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
