<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StaticFileId
 * @property StaticFileSource $Source
 */
class ImageStaticFile extends Shape
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
