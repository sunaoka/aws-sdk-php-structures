<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'US' $CountryCode
 * @property list<string> $Columns
 */
class GeoSpatialColumnGroup extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     CountryCode?: 'US',
     *     Columns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
