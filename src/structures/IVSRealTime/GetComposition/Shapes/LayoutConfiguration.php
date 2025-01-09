<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GridConfiguration $grid
 * @property PipConfiguration $pip
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     grid?: GridConfiguration,
     *     pip?: PipConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
