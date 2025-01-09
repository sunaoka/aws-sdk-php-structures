<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FreeFormLayoutElement> $Elements
 */
class FreeFormSectionLayoutConfiguration extends Shape
{
    /**
     * @param array{Elements: list<FreeFormLayoutElement>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
