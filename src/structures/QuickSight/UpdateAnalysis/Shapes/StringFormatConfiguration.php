<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NullValueFormatConfiguration|null $NullValueFormatConfiguration
 * @property NumericFormatConfiguration|null $NumericFormatConfiguration
 */
class StringFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration|null,
     *     NumericFormatConfiguration?: NumericFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
