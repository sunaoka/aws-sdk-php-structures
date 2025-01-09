<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialStaticFileSource $StaticFileDataSource
 */
class GeospatialDataSourceItem extends Shape
{
    /**
     * @param array{StaticFileDataSource?: GeospatialStaticFileSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
