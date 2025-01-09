<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Height
 * @property Spacing $Padding
 */
class SectionStyle extends Shape
{
    /**
     * @param array{
     *     Height?: string,
     *     Padding?: Spacing
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
