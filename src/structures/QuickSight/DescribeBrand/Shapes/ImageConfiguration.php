<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageSource|null $Source
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{Source?: ImageSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
