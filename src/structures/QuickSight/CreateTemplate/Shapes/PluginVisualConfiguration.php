<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PluginVisualFieldWell>|null $FieldWells
 * @property PluginVisualOptions|null $VisualOptions
 * @property PluginVisualSortConfiguration|null $SortConfiguration
 */
class PluginVisualConfiguration extends Shape
{
    /**
     * @param array{
     *     FieldWells?: list<PluginVisualFieldWell>|null,
     *     VisualOptions?: PluginVisualOptions|null,
     *     SortConfiguration?: PluginVisualSortConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
