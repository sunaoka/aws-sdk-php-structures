<?php

namespace Sunaoka\Aws\Structures\Route53\GetGeoLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContinentCode
 * @property string $CountryCode
 * @property string $SubdivisionCode
 */
class GetGeoLocationRequest extends Request
{
    /**
     * @param array{
     *     ContinentCode?: string,
     *     CountryCode?: string,
     *     SubdivisionCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
