<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InsertableImage> $InsertableImages
 * @property int<100, 1000> $SdrReferenceWhiteLevel
 */
class ImageInserter extends Shape
{
    /**
     * @param array{
     *     InsertableImages?: list<InsertableImage>,
     *     SdrReferenceWhiteLevel?: int<100, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
