<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Foreground
 * @property string $Background
 */
class Palette extends Shape
{
    /**
     * @param array{
     *     Foreground?: string,
     *     Background?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
