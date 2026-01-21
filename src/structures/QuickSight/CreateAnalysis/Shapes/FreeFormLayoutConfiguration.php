<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FreeFormLayoutElement> $Elements
 * @property FreeFormLayoutCanvasSizeOptions|null $CanvasSizeOptions
 * @property list<SheetLayoutGroup>|null $Groups
 */
class FreeFormLayoutConfiguration extends Shape
{
    /**
     * @param array{
     *     Elements: list<FreeFormLayoutElement>,
     *     CanvasSizeOptions?: FreeFormLayoutCanvasSizeOptions|null,
     *     Groups?: list<SheetLayoutGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
