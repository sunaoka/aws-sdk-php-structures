<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMA'|'DOT'|'SPACE'|null $Symbol
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property 'DEFAULT'|'LAKHS'|null $GroupingStyle
 */
class ThousandSeparatorOptions extends Shape
{
    /**
     * @param array{
     *     Symbol?: 'COMMA'|'DOT'|'SPACE'|null,
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     GroupingStyle?: 'DEFAULT'|'LAKHS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
