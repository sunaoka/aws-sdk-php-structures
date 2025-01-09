<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NullValueFormatConfiguration $NullValueFormatConfiguration
 * @property NumericFormatConfiguration $NumericFormatConfiguration
 */
class StringFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration,
     *     NumericFormatConfiguration?: NumericFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
