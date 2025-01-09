<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PluginVisualFieldWell> $FieldWells
 * @property PluginVisualOptions $VisualOptions
 * @property PluginVisualSortConfiguration $SortConfiguration
 */
class PluginVisualConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: list<PluginVisualFieldWell>,
     *     VisualOptions?: PluginVisualOptions,
     *     SortConfiguration?: PluginVisualSortConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
