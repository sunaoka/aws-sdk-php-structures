<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource $Source
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{Source?: ImageSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
