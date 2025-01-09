<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Image $Original
 * @property Image $Height64
 * @property Image $Height32
 */
class ImageSet extends Shape
{
    /**
     * @param array{
     *     Original: Image,
     *     Height64?: Image,
     *     Height32?: Image
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
