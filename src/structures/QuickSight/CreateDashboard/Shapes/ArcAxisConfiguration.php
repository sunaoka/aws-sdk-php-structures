<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArcAxisDisplayRange|null $Range
 * @property int|null $ReserveRange
 */
class ArcAxisConfiguration extends Shape
{
    /**
     * @param array{
     *     Range?: ArcAxisDisplayRange|null,
     *     ReserveRange?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
