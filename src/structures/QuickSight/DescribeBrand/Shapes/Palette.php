<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Foreground
 * @property string|null $Background
 */
class Palette extends Shape
{
    /**
     * @param array{
     *     Foreground?: string|null,
     *     Background?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
