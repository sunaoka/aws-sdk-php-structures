<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\ReverseGeocode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Military'|'PostOfficeBoxes'|'Unique'|null $ZipClassificationCode
 */
class UspsZip extends Shape
{
    /**
     * @param array{ZipClassificationCode?: 'Military'|'PostOfficeBoxes'|'Unique'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
