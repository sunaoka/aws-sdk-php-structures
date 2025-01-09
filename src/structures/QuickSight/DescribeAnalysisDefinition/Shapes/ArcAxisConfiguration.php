<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArcAxisDisplayRange $Range
 * @property int $ReserveRange
 */
class ArcAxisConfiguration extends Shape
{
    /**
     * @param array{
     *     Range?: ArcAxisDisplayRange,
     *     ReserveRange?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
