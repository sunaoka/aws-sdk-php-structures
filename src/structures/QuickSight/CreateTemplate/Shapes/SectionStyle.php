<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Height
 * @property Spacing|null $Padding
 */
class SectionStyle extends Shape
{
    /**
     * @param array{
     *     Height?: string|null,
     *     Padding?: Spacing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
