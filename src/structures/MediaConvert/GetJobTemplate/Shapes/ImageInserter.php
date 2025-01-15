<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InsertableImage>|null $InsertableImages
 * @property int<100, 1000>|null $SdrReferenceWhiteLevel
 */
class ImageInserter extends Shape
{
    /**
     * @param array{
     *     InsertableImages?: list<InsertableImage>|null,
     *     SdrReferenceWhiteLevel?: int<100, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
