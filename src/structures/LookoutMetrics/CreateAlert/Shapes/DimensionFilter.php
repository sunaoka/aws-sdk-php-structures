<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionName
 * @property list<string> $DimensionValueList
 */
class DimensionFilter extends Shape
{
    /**
     * @param array{
     *     DimensionName?: string,
     *     DimensionValueList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
