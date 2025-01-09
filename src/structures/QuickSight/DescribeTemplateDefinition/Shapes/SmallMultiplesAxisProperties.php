<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHARED'|'INDEPENDENT' $Scale
 * @property 'OUTSIDE'|'INSIDE' $Placement
 */
class SmallMultiplesAxisProperties extends Shape
{
    /**
     * @param array{
     *     Scale?: 'SHARED'|'INDEPENDENT',
     *     Placement?: 'OUTSIDE'|'INSIDE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
