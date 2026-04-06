<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageConfiguration $Original
 */
class ImageSetConfiguration extends Shape
{
    /**
     * @param array{Original: ImageConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
