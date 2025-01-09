<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StaticFileId
 * @property StaticFileSource $Source
 */
class SpatialStaticFile extends Shape
{
    /**
     * @param array{
     *     StaticFileId: string,
     *     Source?: StaticFileSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
