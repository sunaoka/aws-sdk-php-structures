<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ParsedQueryComponent>|null $Title
 * @property GeocodeParsedQueryAddressComponents|null $Address
 */
class GeocodeParsedQuery extends Shape
{
    /**
     * @param array{
     *     Title?: list<ParsedQueryComponent>|null,
     *     Address?: GeocodeParsedQueryAddressComponents|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
