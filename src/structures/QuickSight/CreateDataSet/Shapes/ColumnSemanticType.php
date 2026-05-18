<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COUNTRY'|'STATE'|'COUNTY'|'CITY'|'POSTCODE'|'LONGITUDE'|'LATITUDE'|null $GeographicalRole
 */
class ColumnSemanticType extends Shape
{
    /**
     * @param array{GeographicalRole?: 'COUNTRY'|'STATE'|'COUNTY'|'CITY'|'POSTCODE'|'LONGITUDE'|'LATITUDE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
