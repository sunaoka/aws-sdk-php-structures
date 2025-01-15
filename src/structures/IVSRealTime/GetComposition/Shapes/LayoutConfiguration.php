<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridConfiguration|null $grid
 * @property PipConfiguration|null $pip
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     grid?: GridConfiguration|null,
     *     pip?: PipConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
