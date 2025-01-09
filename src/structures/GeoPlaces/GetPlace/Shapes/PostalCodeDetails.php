<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PostalCode
 * @property 'Usps' $PostalAuthority
 * @property 'UspsZip'|'UspsZipPlus4' $PostalCodeType
 * @property UspsZip $UspsZip
 * @property UspsZipPlus4 $UspsZipPlus4
 */
class PostalCodeDetails extends Shape
{
    /**
     * @param array{
     *     PostalCode?: string,
     *     PostalAuthority?: 'Usps',
     *     PostalCodeType?: 'UspsZip'|'UspsZipPlus4',
     *     UspsZip?: UspsZip,
     *     UspsZipPlus4?: UspsZipPlus4
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
