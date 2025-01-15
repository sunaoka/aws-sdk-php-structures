<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHARED'|'INDEPENDENT'|null $Scale
 * @property 'OUTSIDE'|'INSIDE'|null $Placement
 */
class SmallMultiplesAxisProperties extends Shape
{
    /**
     * @param array{
     *     Scale?: 'SHARED'|'INDEPENDENT'|null,
     *     Placement?: 'OUTSIDE'|'INSIDE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
