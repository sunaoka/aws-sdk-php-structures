<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, GraphDisplayConfig>|null $graph
 * @property TableDisplayConfigStruct|null $table
 */
class DisplayConfig extends Shape
{
    /**
     * @param array{
     *     graph?: array<string, GraphDisplayConfig>|null,
     *     table?: TableDisplayConfigStruct|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
