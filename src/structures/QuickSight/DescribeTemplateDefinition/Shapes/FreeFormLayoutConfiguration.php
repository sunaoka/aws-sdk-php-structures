<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FreeFormLayoutElement> $Elements
 * @property FreeFormLayoutCanvasSizeOptions|null $CanvasSizeOptions
 */
class FreeFormLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Elements: list<FreeFormLayoutElement>,
     *     CanvasSizeOptions?: FreeFormLayoutCanvasSizeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
