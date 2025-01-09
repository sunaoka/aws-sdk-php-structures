<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\GetPlace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Military'|'PostOfficeBoxes'|'Unique' $ZipClassificationCode
 */
class UspsZip extends Shape
{
    /**
     * @param array{ZipClassificationCode?: 'Military'|'PostOfficeBoxes'|'Unique'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
