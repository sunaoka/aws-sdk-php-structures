<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DimensionName
 * @property list<string>|null $DimensionValueList
 */
class DimensionFilter extends Shape
{
    /**
     * @param array{
     *     DimensionName?: string|null,
     *     DimensionValueList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
