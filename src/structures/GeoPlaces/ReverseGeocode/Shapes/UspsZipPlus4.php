<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Firm'|'General'|'HighRise'|'PostOfficeBox'|'Rural'|'Street'|null $RecordTypeCode
 */
class UspsZipPlus4 extends Shape
{
    /**
     * @param array{RecordTypeCode?: 'Firm'|'General'|'HighRise'|'PostOfficeBox'|'Rural'|'Street'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
