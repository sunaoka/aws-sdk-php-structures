<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialNullSymbolStyle $SymbolStyle
 */
class GeospatialNullDataSettings extends Shape
{
    /**
     * @param array{SymbolStyle: GeospatialNullSymbolStyle} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
