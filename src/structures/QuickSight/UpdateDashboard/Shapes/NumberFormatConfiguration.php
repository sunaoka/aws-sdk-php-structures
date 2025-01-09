<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericFormatConfiguration $FormatConfiguration
 */
class NumberFormatConfiguration extends Shape
{
    /**
     * @param array{FormatConfiguration?: NumericFormatConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
