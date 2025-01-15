<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property string|null $Color
 */
class FreeFormLayoutElementBorderStyle extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Color?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
