<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Image $Original
 * @property Image|null $Height64
 * @property Image|null $Height32
 */
class ImageSet extends Shape
{
    /**
     * @param array{
     *     Original: Image,
     *     Height64?: Image|null,
     *     Height32?: Image|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
