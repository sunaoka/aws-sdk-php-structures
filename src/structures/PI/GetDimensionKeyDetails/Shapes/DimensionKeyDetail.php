<?php

namespace Sunaoka\Aws\Structures\PI\GetDimensionKeyDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property string|null $Dimension
 * @property 'AVAILABLE'|'PROCESSING'|'UNAVAILABLE'|null $Status
 */
class DimensionKeyDetail extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Dimension?: string|null,
     *     Status?: 'AVAILABLE'|'PROCESSING'|'UNAVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
