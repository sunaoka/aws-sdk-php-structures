<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericAxisOptions|null $NumericAxisOptions
 * @property DateAxisOptions|null $DateAxisOptions
 */
class AxisDataOptions extends Shape
{
    /**
     * @param array{
     *     NumericAxisOptions?: NumericAxisOptions|null,
     *     DateAxisOptions?: DateAxisOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
