<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InsertableImage> $InsertableImages
 * @property int $SdrReferenceWhiteLevel
 */
class ImageInserter extends Shape
{
    /**
     * @param array{
     *     InsertableImages?: list<InsertableImage>,
     *     SdrReferenceWhiteLevel?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
