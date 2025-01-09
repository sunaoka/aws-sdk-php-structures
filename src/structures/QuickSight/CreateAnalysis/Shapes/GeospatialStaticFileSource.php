<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StaticFileId
 */
class GeospatialStaticFileSource extends Shape
{
    /**
     * @param array{StaticFileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
