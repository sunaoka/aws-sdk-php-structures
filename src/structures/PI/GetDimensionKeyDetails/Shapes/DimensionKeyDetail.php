<?php

namespace Sunaoka\Aws\Structures\PI\GetDimensionKeyDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property string $Dimension
 * @property 'AVAILABLE'|'PROCESSING'|'UNAVAILABLE' $Status
 */
class DimensionKeyDetail extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Dimension?: string,
     *     Status?: 'AVAILABLE'|'PROCESSING'|'UNAVAILABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
