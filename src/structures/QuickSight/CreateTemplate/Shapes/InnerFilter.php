<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CategoryInnerFilter|null $CategoryInnerFilter
 */
class InnerFilter extends Shape
{
    /**
     * @param array{CategoryInnerFilter?: CategoryInnerFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
