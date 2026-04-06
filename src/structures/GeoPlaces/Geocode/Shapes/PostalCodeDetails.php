<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Geocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PostalCode
 * @property 'Usps'|null $PostalAuthority
 * @property 'UspsZip'|'UspsZipPlus4'|null $PostalCodeType
 * @property UspsZip|null $UspsZip
 * @property UspsZipPlus4|null $UspsZipPlus4
 */
class PostalCodeDetails extends Shape
{
    /**
     * @param array{
     *     PostalCode?: string|null,
     *     PostalAuthority?: 'Usps'|null,
     *     PostalCodeType?: 'UspsZip'|'UspsZipPlus4'|null,
     *     UspsZip?: UspsZip|null,
     *     UspsZipPlus4?: UspsZipPlus4|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
