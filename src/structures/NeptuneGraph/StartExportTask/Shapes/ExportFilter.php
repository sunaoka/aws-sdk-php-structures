<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, ExportFilterElement> $vertexFilter
 * @property array<string, ExportFilterElement> $edgeFilter
 */
class ExportFilter extends Shape
{
    /**
     * @param array{
     *     vertexFilter?: array<string, ExportFilterElement>,
     *     edgeFilter?: array<string, ExportFilterElement>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
